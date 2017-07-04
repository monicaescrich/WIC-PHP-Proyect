@extends('layouts.Admprincipal')

@section('content')

		<div class="container">
		<a href="{{ route('index_categ') }}" class="btn btn-default">Volver</a>
	<br><br>

		<div class="panel panel-primary">
	      <div class="panel-heading"><h1>{{ $categorias -> descripcion }}</h1></div>
	      <div class="panel-body">
	      	<table class="table">
	      		<tr>
	      			<th>ID</th>
	      			<td>{{ $categorias -> id_categoria	 }}</td>
	      		</tr>
	      		<tr>
	      			<th>Tipo</th>
	      			<td>{{ $categorias -> tipo }}</td>
	      		</tr>        
	      	</table>
	      </div>
	    </div>
 
		 
		</div>

@stop