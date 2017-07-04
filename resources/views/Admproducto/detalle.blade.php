@extends('layouts.Admprincipal')

@section('content')

		<div class="container">
		<a href="{{ route('index_prod') }}"  class="btn btn-default">Volver</a>
	<br><br>

		<div class="panel panel-primary">
	      <div class="panel-heading"><h1>{{ $producto -> nombre }}</h1></div>
	      <div class="panel-body">
	      	<table class="table">
	      		<tr>
	      			<th>ID</th>
	      			<td>{{ $producto -> id_producto	 }}</td>
	      		</tr>
	      		<tr>
	      			<th>Categoría</th>
	      			<td>{{ $producto -> categoria }}</td>
	      		</tr>
	      		<tr>
	      			<th>Precio</th>
	      			<td>{{ $producto -> precio }}</td>
	      		</tr>
	      		<tr>
	      			<th>Descripcion</th>
	      			<td>{{ $producto -> descripcion }}</td>
	      		</tr>
	      		<tr>
	      			<th>Cantidad</th>
	      			<td>{{ $producto -> disponible }}</td>
	      		</tr>
	      		<tr>
	      			<th></th>
	      			<td><img src="{{ asset('img/'.$producto -> imagen) }}" alt="imagen de producto" style="width: 300px; height: 300px;"></td>
	      		</tr>	        
			        
	      	</table>
	      </div>
	    </div>
 
		 
		</div>

@stop