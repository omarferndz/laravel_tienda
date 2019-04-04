<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::bind('product', function($slug){
	return App\Product::where('slug', $slug)->first();
});

// Category dependency injection
Route::bind('category', function($category){
    return App\Category::find($category);
});

Route::get('/',[
    'as' => 'home',
    'uses' => 'StoreController@index'
]);

Route::get('product/{slug}',[
    'as' => 'product-detail',
    'uses' => 'StoreController@show'
]);

// Carrito--------------

Route::get('cart/show',[
    'as' => 'cart-show',
    'uses' => 'CartController@show'
]);

Route::get('cart/add/{product}',[
    'as' => 'cart-add',
    'uses' => 'CartController@add'
]);

Route::get('cart/delete/{product}',[
    'as' => 'cart-delete',
    'uses' => 'CartController@delete'
]);

Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses' => 'CartController@trash'
]);

Route::get('cart/update/{product}/{quantity}', [
    'as' => 'cart-update',
    'uses' => 'CartController@update'
]);

Route::get('order-detail', [
    'middleware' => 'auth',
    'as' => 'order-detail',
    'uses' => 'CartController@orderDetail'
]);

// Paypal
// Enviamos nuestro pedido a PayPal
Route::get('payment', array(
    'as' => 'payment',
    'uses' => 'PaypalController@postPayment',
));
// Después de realizar el pago Paypal redirecciona a esta ruta
Route::get('payment/status', array(
    'as' => 'payment.status',
    'uses' => 'PaypalController@getPaymentStatus',
));

// Admin
Route::get('admin/home', function(){
    return view('admin.home');
});

Route::name('admin.')->group(function(){
    Route::resource('admin/category', 'Admin\CategoryController');
});

Route::name('admin.')->group(function(){
    Route::resource('admin/product', 'Admin\ProductController');
});

// Authentication routes...
Auth::routes();
