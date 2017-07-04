@extends('layouts.Admprincipal')

@section('content')
	<h1>Productos</h1>
	<a href="admproducto/create" class="btn btn-primary">Agregar producto</a>
	

		<div class="container">
      
		  <table class="table table-striped">
		    <thead>
		      <tr>
		      	<th>ID</th>
		        <th>Nombre</th>
		        <th>Categoría</th>
		        <th>Precio</th>
		        <th>Descripcion</th>
		        <th>Cantidad</th>
		        <th>Imagen</th>
		        <th></th>
		        <th></th>
		        <th></th>
		      </tr>
		    </thead>
		    <tbody>
		   	@foreach($productos as $producto)
		      <tr>
		      	<td>{{ $producto -> id_producto }}</td>
		        <td>{{ $producto -> nombre }}</td>
		        <td>{{ $producto -> categoria }}</td>
		        <td>{{ $producto -> precio }}</td>
		        <td>{{ $producto -> descripcion }}</td>
		        <td>{{ $producto -> disponible }}</td>
		        <td>{{ $producto -> imagen }}</td>
		        <td><a href="{{ route('detalle_prod', ['id' => $producto -> id_producto]) }}" class="btn btn-info">Detalle</a>
		        </td>
		        <td><a href="{{ route('edit_post_prod', ['id' => $producto -> id_producto]) }}" class="btn btn-info">Editar</a></td>
		        <td>
		        	<form action="{{ route('delete_post_prod',$producto-> id_producto) }}" method="POST">
			        	{{ csrf_field() }}
			        	{{ method_field("DELETE") }}
		        	<input type="submit" class="btn btn-danger" value="Borrar"/>
		        	</form>
		        </td> 
		      </tr>
		 	@endforeach
		    </tbody>
		  </table>
		  {{ $productos->render() }}
		</div>

@stop