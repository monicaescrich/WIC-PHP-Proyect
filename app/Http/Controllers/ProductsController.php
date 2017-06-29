<?php

namespace App\Http\Controllers;

use App\producto; 

class ProductsController extends Controller
{
    public function blusas(){
    $page='blusas';
    $products=producto::blusas()->get();
    $tittle='blusas';
   
    return view('principal',compact('page','products'));

   }
}
