@extends('master')
@section("content")
<div class="container">
  <div class="row">
    <div class="col-sm-6">
      <img class="detail-img" src="{{$product['gallery']}}" alt="">

    </div>
    <div class="col-sm-6">
        <a href="/" class="btn btn-primary">Retour</a>
        <h2>{{$product['name']}}</h2>
        <h3>Price: {{$product['price']}} €</h3>
        <h4>Details: {{$product['description']}}</h4>
        <h4>Category: {{$product['category']}}</h4>
        <br><br>
        <form action="/add_to_cart" method="post">
          @csrf
          <input type="hidden" name="product_id" value={{$product['id']}}>
          <button class="btn btn-primary">Ajouter au Panier</button>
        </form>
        <br><br>

        <br><br>

    </div>
  </div>

</div>
@endsection
