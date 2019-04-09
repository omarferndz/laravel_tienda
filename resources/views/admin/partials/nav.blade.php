<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>      
      {!! link_to('admin/home', ">_FoDP", $attributes = array('class' => 'navbar-brand main-title')) !!}
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <p class="navbar-text"><i class="fa fa-dashboard"></i> Dashboard</p>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Categorias</a></li>
        <li><a href="#">Productos</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Usuarios</a></li>
        @include('store.partials.menu-user')
      </ul>
    </div>
  </div>
</nav>