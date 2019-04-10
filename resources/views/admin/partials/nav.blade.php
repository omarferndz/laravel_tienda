<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
      {!! link_to('/', ">_EasyCommerce", $attributes = array('class' => 'navbar-brand main-title')) !!}
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <a href="{{ url('admin/home') }}" class="navbar-text"><i class="fa fa-dashboard"></i> Dashboard</a>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ route('admin.category.index') }}">Categorias</a></li>
        <li><a href="{{ route('admin.product.index') }}">Productos</a></li>
        <li><a href="{{ route('admin.order.index') }}">Pedidos</a></li>
        <li><a href="{{ route('admin.user.index') }}">Usuarios</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>