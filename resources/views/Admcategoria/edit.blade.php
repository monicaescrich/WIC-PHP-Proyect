@extends('layouts.Admprincipal')

@section('content')

	<div class="col-md-6">
	<a href="{{ route('index_categ') }}" class="btn btn-default">Volver</a>
	<br><br>
		<form action="{{ route('update_post_categ', ['id' => $categorias->id_categoria]) }}" method="POST" class="form-horizontal" enctype="multipart/form-data">

		{{ method_field('PUT') }}

			<h2>Editar Categoria</h2>
			<div class="form-group">
				<label>Tipos</label>
				<select class="form-control" name="id_tipo">
				@foreach($tipos as $tipo)
					<option value="{{ $tipo->id_tipo }}" @if($tipo ->id_tipo == $categorias->id_tipo)
						selected
					@endif>
					{{ $tipo->descripcion }}
					</option>
				@endforeach
				</select>
			</div>
			<div class="form-group">
				<label>Nombre</label>
				<input type="Text" name="descripcion" class="form-control" value="{{ $categorias->descripcion }}">
			</div>
			
			<button class="btn btn-primary">Editar Categoria</button>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		</form>
	</div>
@endsection
