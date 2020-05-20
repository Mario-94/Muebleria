@extends('layouts.main')
@section('contenido')
<br>
<div class="container row">
  <div class="col-md-12">
    <div class="card-header">
      Productos nuevos
    </div>
    <br>
    <div class="card-columns" >
      @foreach ($products as $product)
      <div class="card">
        <img src="{{$product->url}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <a href="{{ route('tienda.show_product_detail', $product -> id )  }}" class="btn green-line-absolute btn-sm">Ver</a>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</div>
@endsection