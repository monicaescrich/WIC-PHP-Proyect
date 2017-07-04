@extends('layouts.Admprincipal')

@section('content')

	<div class="col-md-6">
	<a href="{{ route('index_prod') }}"  class="btn btn-default">Volver</a>
	<br><br>
		<form action="{{ route('update_post_prod', ['id' => $producto->id_producto]) }}" method="POST" class="form-horizontal">

		{{ method_field('PUT') }}
			

			<h2>Editar producto</h2>

			<div class="form-group">
				<label>Categoria</label>
				<select class="form-control" name="id_categoria">
				@foreach($categorias as $categoria)
					<option value="{{ $categoria->id_categoria }}"  
					@if($producto ->id_categoria == $categoria->id_categoria)
						selected
					@endif
					>
						{{ $categoria->descripcion }}
					</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Nombre</label>
				<input type="Text" name="nombre" class="form-control" value="{{ $producto ->nombre }}">
			</div>
			<div class="form-group">
				<label>Precio</label>
				<input type="number" name="precio" class="form-control" value="{{ $producto ->precio }}">
			</div>
			<div class="form-group">
				<label>Cantidad</label>
				<input type="number" name="disponible" class="form-control" value="{{ $producto ->disponible }}">
			</div>
			<div class="form-group">
				<label>Descripcion</label>
				<textarea rows="10" cols="40" name="descripcion" class="form-control" >{{ $producto ->descripcion }} </textarea>
			</div>
			<div class="form-group">
				<label>Imagen</label>
				<input type="text" name="imagen" class="form-control" value="{{ $producto ->imagen }}">
			</div>
			<button class="btn btn-primary">Editar producto</button>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
@endsection
