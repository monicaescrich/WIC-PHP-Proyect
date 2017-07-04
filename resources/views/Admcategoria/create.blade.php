@extends('layouts.Admprincipal')

@section('content')

	<div class="col-md-6">
	<a href="{{ route('index_categ') }}" ><button class="btn btn-default">Volver</button>	</a>
	<br><br>
		<form action="{{ route('store_post_categ') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

			<h2>Agregar Cetgoria</h2>
			<div class="form-group">
				<label>Tipos</label>
				<select class="form-control" name="tipo">
				@foreach($tipos as $tipo)
					<option value="{{ $tipo->id_tipo }}">{{ $tipo->descripcion }}</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Nombre</label>
				<input type="Text" name="nombre" class="form-control" value="{{ old('nombre') }}">
			</div>
			
			<button class="btn btn-primary">Agregar Producto</button>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
@endsection
