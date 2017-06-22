<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $tittle='Walk In Closet';
    $products=[
            'ropa', 
            'zapatos', 
            'accesorios'
    ];
    return view('welcome',compact('tittle','products'));
});

Route::get('catalogo', function () {

    $tittle='WalkIn Closet';
    $products=[
            'ropa', 
            'zapatos', 
            'accesorios'
    ];
    return view('catalogo',compact('tittle','products'));
});

Route::get('shop', function () {
    return view('principal');
});