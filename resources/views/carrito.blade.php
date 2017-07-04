
@extends('layouts.app')

@section('title', 'Shop')

@section('sidebar')
    @parent

    
@endsection

@section('content')

@php($pagina=$page)
<h2 class="sub-header">Mi Carrito de Compras</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              @foreach($carrito as $row)
                <tr>
                  <td>{{$row->id}}</td>
                  <td>{{$row->name}}</td>
                  <td>{{$row->qty}}</td>
                  <td>{{$row->price}}</td>
                  <td><button type="button" class="btn btn-default btn-xs">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
            <input type="submit" class="btn btn-primary btn-block" value="Continuar">

@endsection