<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
  $total= ProductController::cartItem();
}


?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>-->
      <a class="navbar-brand" href="/"><h5 style="color:white">AminAriShop</h5></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="/"><h5 style="color:white">Accueil</h5></a></li>
        <li class=""><a href="/myorders"><h5 style="color:white">Commandes</h5></a></li>
      </ul>
      <form action="/search"class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query"class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Rechercher</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist"><h5 style="color:white">Panier({{$total}})</h5></a></li>
        @if(Session::has('user'))
        <li class="dropdown">
       <a class="dropdown-toggle" data-toggle="dropdown" href="/logout"><h5 style="color:white">{{Session::get('user')['name']}}</h5>
       <span class="caret"></span></a>
       <ul class="dropdown-menu">
         <li><a href="/logout"><h5 style="color:red">Deconnection</h5></a></li>
       </ul>
     </li>
     @else
     <li><a href="/login"><h5 style="color:white">Connexion</h5></a></li>
      <li><a href="/register"><h5 style="color:white">S'enregister</h5></a></li>
     @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
