@extends('layouts.app')

@section('title', 'Shop')

@section('sidebar')
    @parent

    
@endsection

@section('content')

@php($pagina=$page)

@php($msg=$mensaje)

                <div class="row carousel-holder">

                    <div class="col-md-12">
                         <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              @for ($i = 0; $i < 2; $i++)
                                @if($i==0)
                                
                                <div class="item active">
                              @else  
                              <div class="item ">
                                @endif
                                  @if ($pagina=='pantalones')
                                <img src="/img/jeans{{$i}}.png" alt="Foto de jeans 'Con nosotros encuentras TODO' " style="width:100%;">
                                  @elseif ($pagina=='accesorios')
                                 <img src="/img/accesorios{{$i}}.png" alt="Foto de jeans 'Con nosotros encuentras TODO' " style="width:100%;">
                                  @elseif ($pagina=='blusas')
                                 <img src="/img/blusas{{$i}}.png" alt="Foto de jeans 'Con nosotros encuentras TODO' " style="width:100%;">
                                 @endif
                            </div>
                            
                                
                            @endfor

                            
                            
                            </div>

                           
                        </div>
                        </div>

                </div>


                <div class="row">
                @foreach( $products as $product)
                    <div class="col-sm-4 col-lg-4 col-md-4">
                    <form method="post" action="/{{$pagina}}">
                        <div class="thumbnail">
                            <img src="/img/{{$pagina}}/{{$product->imagen}}" alt="imagen de blusa">
                            <div class="caption">
                                <h4 class="pull-right">{{$product->precio}}</h4>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" name="idProducto" value="{{$product->id_producto}}">
                                <input type="hidden" name="nombreProducto" value="{{$product->nombre}}">
                                <input type="hidden" name="precioProducto" value="{{$product->precio}}">
                                <h4><a href="#">{{$product->nombre}}</a>
                                </h4>
                                <p>{{$product->descripcion}}</p>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">{{$product->disponible}} disponible</p>
                                <p>
                                   <button type="submit" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-shopping-cart"></span>
                                     Añadir a Carrito
                                    </button> 
                                   
                                </p>
                            </div>
                        </div>
                        </form>
                    </div>
                    @endforeach



                    

                </div>
@endsection