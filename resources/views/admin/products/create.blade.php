@extends('layouts.menu_admin')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					Crear producto
				</div>
				<div class="card-body">
					<form action="{{ route('admin.products_store') }}" method="POST" class="needs-validation" novalidate>
						@csrf
						<div class="form-group">
							<label  for="">Codigo</label>
							<input type="text" name="code" class="form-control" required>
							<div class="invalid-feedback">
								Porfavor ingresa un codigo de producto.
							</div>
						</div>

						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" name="name" class="form-control" required>
							<div class="invalid-feedback">
								Porfavor ingresa un nombre de producto.
							  </div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="">Costo</label>
								<input type="number" class="form-control" name="cost" required >
								<div class="invalid-feedback">
									Porfavor ingresa el costo del producto.
								</div>
							</div>

							<div class="form-group col-md-4">
								<label for="">Cantidad en almacen</label>
								<input type="number" name="stock" class="form-control" required>
								<div class="invalid-feedback">
									Porfavor ingresa la cantidad del producto en almacen.
								  </div>
							</div>

							<div class="form-group col-md-4">
								<label for="">Categoria</label>
								<select class="form-control" type="text" name="category" required>
									@foreach($categories as $category)
										<option value = "{{ $category -> id }}">{{ $category -> name }}</option>
									@endforeach
								</select>
								<div class="invalid-feedback">
									Porfavor selecciona una categoria.
								</div>
							</div>
						</div>
						  
						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="">Numero de piezas</label>
								<input type="number" class="form-control" name="number_of_pieces" required >
								<div class="invalid-feedback">
									Porfavor ingresa el numero de piezas que componen el producto.
								</div>
							</div>

							<div class="form-group col-md-4">
								<label for="">Medidas</label>
								<input type="text" name="measurements" class="form-control" required>
								<div class="invalid-feedback">
									Porfavor ingresa las medidas.
								  </div>
							</div>

							<div class="form-group col-md-4">
								<label for="">Peso</label>
								<input type="number" name="weight" class="form-control" required>
								<div class="invalid-feedback">
									Porfavor ingresa el peso del producto.
								  </div>
							</div>
							
						</div>

						<div class="form-group">
							<label  for="">Materiales</label>
							<input type="text" name="material" class="form-control" placeholder="ejemplo: necino,pino" required>
							<div class="invalid-feedback">
								Porfavor ingresa el nombre de los materiales separado por coma sin espacios.
							</div>
						</div>

						<div class="form-group">
							<label  for="">Colores</label>
							<input type="text" name="colors" class="form-control" placeholder="ejemplo: negro pieano,azul" required>
							<div class="invalid-feedback">
								Porfavor ingresa el nombre de los colores separado por coma sin espacio despues de coma.
							</div>
						</div>

						<div class="form-group">
							<label  for="">Diseño</label>
							<input type="text" name="desing" class="form-control" required>
							<div class="invalid-feedback">
								Porfavor ingresa el diseño del producto.
							</div>
						</div>

						<div class="form-group">
							<label for="">Descripcion</label>
							<textarea class="form-control" name="description" rows="3" required></textarea>
							<div class="invalid-feedback">
								Porfavor describe el producto.
							</div>
						</div>

						<div class="card-header">
							Agregar imagenes
						</div>
						
						<div class="form-group">
							<label  for="">Url de la imagen principal</label>
							<input type="text" name="url1" class="form-control" required>
							<div class="invalid-feedback">
								Porfavor ingresa el url de la imagen.
							</div>
						</div>
						<div class="form-group">
							<label  for="">Url de la imagen secundaria</label>
							<input type="text" name="url2" class="form-control" required>
							<div class="invalid-feedback">
								Porfavor ingresa el url de la imagen.
							</div>
						</div>
						<div class="form-group">
							<label  for="">Url de la tercer imagen </label>
							<input type="text" name="url3" class="form-control" required>
							<div class="invalid-feedback">
								Porfavor ingresa el url de la imagen.
							</div>
						</div>
						  
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href=" {{ route('admin.products_index') }}" class="btn btn-danger">Cancelar</a>
					</form>  
				</div>
			</div>
		</div>
		<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function() {
			  'use strict';
			  window.addEventListener('load', function() {
				// Fetch all the forms we want to apply custom Bootstrap validation styles to
				var forms = document.getElementsByClassName('needs-validation');
				// Loop over them and prevent submission
				var validation = Array.prototype.filter.call(forms, function(form) {
				  form.addEventListener('submit', function(event) {
					if (form.checkValidity() === false) {
					  event.preventDefault();
					  event.stopPropagation();
					}
					form.classList.add('was-validated');
				  }, false);
				});
			  }, false);
			})();
			</script>
	</div>
@endsection