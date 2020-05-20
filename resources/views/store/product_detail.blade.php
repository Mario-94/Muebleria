@extends('layouts.main')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					{{$texto ?? '' }}
					{{-- revisar como pasar las variables por default por que originalmente el metodo de jony esta de esta manera  {{$texto}} pero marca error--}}
				</div>
				<div class="card-body">
					<div class="media">
						@foreach($products_image as $product_image)
						<img src="{{ $product_image -> url }}" alt="..." class="rounded float-left" width="200px">
						<p>{{ $product_image -> priority }}</p>
						@endforeach
                        <div class="media-body">
                          <h2 class="mt-0">{{ $product -> name }}</h5>
                          <h5 class="mt-0">Codigo = {{ $product -> code }}</h5>
                          <p>Costo = {{ $product -> cost }}</p>
                          <p class="mb-0">Numero en stock = {{ $product -> stock }}</p>
						  <p class="mb-0">{{ $product -> category_id }}</p>
                        </div>
                      </div>
				</div>
			</div>
		</div>
	</div>
@endsection
