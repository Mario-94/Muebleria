@extends('layouts.main')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					{{$texto}}
				</div>
				<div class="card-body">
					<div class="row row-cols-1 row-cols-md-3">                        
                        @foreach($products as $product)
                            <div class="col mb-4">
                                <div class="card h-100">
                                <img src="{{ $product -> url }}" class="img-thumbnail" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product -> name }}</h5>
                                    <p class="card-text">{{ $product -> cost }}</p>
                                    <footer class="blockquote-footer">Precio $ <cite title="Source Title">{{ $product -> cost }}</cite></footer>
                                    <a href="{{ route('tienda.show_product_detail', $product -> id )  }}" class="btn btn-info btn-sm">Ver</a>
                                </div>
                                </div>
                            </div> 
                        @endforeach
                        
                    </div>
				</div>
			</div>
		</div>
	</div>
@endsection