<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Cart as Cart;
use App\producto; 

class ProductsController extends Controller
{
    public function blusas(){
    $page='blusas';
    $products=producto::blusas()->get();
    $tittle='blusas';
   $mensaje="";
   
    return view('principal',compact('page','products','mensaje'));

   }

    public function addBlusas(Request $request ){
        $page='blusas';
         $products=producto::blusas()->get();
    $tittle='blusas';
   $mensaje="añadido a carrito";
    Cart::add($request->idProducto, $request->nombreProducto, 1, $request->precioProducto);
   
    return view('principal',compact('page','products','mensaje'));

   }

    public function pantalones(){
    $page='pantalones';
    $products=producto::pantalones()->get();
    $tittle='pantalones';
   $mensaje="";
   
    return view('principal',compact('page','products','mensaje'));

   }

   public function addPantalones(Request $request ){
        $page='pantalones';
         $products=producto::pantalones()->get();
    $tittle='pantalones';
   $mensaje="añadido a carrito";
    Cart::add($request->idProducto, $request->nombreProducto, 1, $request->precioProducto);
   
    return view('principal',compact('page','products','mensaje'));

   }

    public function accesorios(){
    $page='accesorios';
    $products=producto::accesorios()->get();
    $tittle='accesorios';
   $mensaje="";
   
    return view('principal',compact('page','products','mensaje'));

   }

   public function addAccesorios(Request $request ){
        $page='accesorios';
         $products=producto::accesorios()->get();
    $tittle='accesorios';
   $mensaje="añadido a carrito";
    Cart::add($request->idProducto, $request->nombreProducto, 1, $request->precioProducto);
   
    return view('principal',compact('page','products','mensaje'));

   }
}
