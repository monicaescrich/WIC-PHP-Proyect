@extends('layouts.Admprincipal')

@section('content')
	<h1>Categorias</h1>
	<a href="admcategoria/create" class="btn btn-primary">Agregar categoria</a>
	

		<div class="container">
      
		  <table class="table table-striped">
		    <thead>
		      <tr>
		      	<th>ID</th>
		        <th>Tipo</th>
		        <th>Descripcion</th>
		        <th></th>
						<th></th>
						<th></th>
		      </tr>
		    </thead>
		    <tbody>
		   	@foreach($categorias as $categoria)
		      <tr>
		      	<td>{{ $categoria -> id_categoria }}</td>
		        <td>{{ $categoria -> tipo }}</td>
		        <td>{{ $categoria -> descripcion }}</td>
		        <td><a href="{{ route('detalle_categ', ['id' => $categoria -> id_categoria]) }}" class="btn btn-info">Detalle</a>
		        </td>
		        <td><a href="{{ route('edit_post_categ', ['id' => $categoria -> id_categoria]) }}" class="btn btn-info">Editar</a></td>
		        <td>
		        	<form action="{{ route('delete_post_categ',$categoria-> id_categoria) }}" method="POST">
			        	{{ csrf_field() }}
			        	{{ method_field("DELETE") }}
		        	<input type="submit" class="btn btn-danger" value="Borrar"/>
		        	</form>
		        </td> 
		      </tr>
		 	@endforeach
		    </tbody>
		  </table>
		  
		</div>

@stop