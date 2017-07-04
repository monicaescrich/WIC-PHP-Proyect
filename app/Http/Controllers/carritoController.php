<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;

class carritoController extends Controller
{
    public function getCarrito( ){
      $page='Mi Carrito' ;
    $carrito=Cart::content();
   
    return view('carrito',compact('carrito','page'));

   }
}
