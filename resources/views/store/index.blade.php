@extends('layouts.main')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="https://i.pinimg.com/originals/b4/6c/3b/b46c3b0b96606d27a457b35c12941321.jpg" class="img-fluid" alt="Responsive image">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/b4/6c/3b/b46c3b0b96606d27a457b35c12941321.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://i.pinimg.com/originals/b4/6c/3b/b46c3b0b96606d27a457b35c12941321.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
			</div>
		</div>
  </div>
  <div class = " footer bg-secondary green-line-absolute">    
  </div>
  @include('store.main_content_store')
@endsection