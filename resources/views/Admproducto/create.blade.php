@extends('layouts.Admprincipal')

@section('content')

	<div class="col-md-6">
	<a href="{{ route('index_prod') }}"  class="btn btn-default">Volver</a>
	<br><br>
		<form action="{{ route('store_post_prod') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

			<h2>Agregar producto</h2>
			<div class="form-group">
				<label>Categoria</label>
				<select class="form-control" name="categoria">
				@foreach($categorias as $categoria)
					<option value="{{ $categoria->id_categoria }}">{{ $categoria->descripcion }}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Nombre</label>
				<input type="Text" name="nombre" class="form-control" value="{{ old('nombre') }}">
			</div>
			<div class="form-group">
				<label>Precio</label>
				<input type="number" name="precio" class="form-control" value="{{ old('precio') }}">
			</div>
			<div class="form-group">
				<label>Cantidad</label>
				<input type="number" name="cantidad" class="form-control" value="{{ old('cantidad') }}">
			</div>
			<div class="form-group">
				<label>Descripcion</label>
				<textarea rows="10" cols="40" name="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
			</div>
			<div class="form-group">
				<label>Imagen</label>
				<input type="file" accept="image/jpeg, image/jpg" name="picture"	>

				<!--<input type="text" name="imagen" class="form-control" value="{{ old('imagen') }}">
				-->
			</div>
			<button class="btn btn-primary">Agregar Producto</button>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
@endsection
