<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CartController extends Controller
{
	public function __construct()
	{
		if(!\Session::has('cart')) \Session::put('cart', array());
	}

    //	Show cart: mostrar el carrito 
    public function show()
    {
    	$cart = \Session::get('cart');
       	return view('store.cart', compact('cart'));
    }

    //	Add item: agregar item 
    public function add(Product $product)
    {
    	$cart = \Session::get('cart');
    	$product->quantity =1;
    	$cart[$product->slug] = $product;
    	\Session::put('cart', $cart);

    	return redirect()->route('cart-show');
    }

    //	Delete item: quitar item

    //	Update item: actualizar item

    //	Trash cart: vaciar carrito

    //  Total: obtener el total a pagar
}
