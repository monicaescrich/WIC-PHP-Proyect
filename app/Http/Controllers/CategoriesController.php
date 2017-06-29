<?php

namespace App\Http\Controllers;

use App\Categoria;


class CategoriesController extends Controller
{
   public function index(){
      

    $tittle='Walk In Closet';
    $products=categoria::all();
   
    return view('welcome',compact('tittle','products'));

   }



}
