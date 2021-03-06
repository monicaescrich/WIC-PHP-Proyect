
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
                  <td><form action="/carrito/{{{$row->rowId}}}">
                    <button type="submit" class="btn btn-default btn-xs"  >
                        <span class="glyphicon glyphicon-trash" ></span>
                    </button>
                  </form>
                  </td>
                </tr>
                @endforeach
                
              </tbody>
              <tfoot>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td>Subtotal</td>
                  <td>{{Cart::subtotal()}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td>Impuesto</td>
                  <td>{{Cart::tax()}}</td>
                  <td></td>
                </tr>
                <tr>
                  <td colspan="2">&nbsp;</td>
                  <td><b> Total</b></td>
                  <td><b>{{Cart::total()}}</b></td>
                  <td></td>
                </tr>
              </tfoot>

            </table>
            <input type="submit" class="btn btn-primary btn-block" value="Continuar">
            
            </div>
@endsection