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

 

Route::get('/', 'CategoriesController@index');

Route::get('blusas', 'ProductsController@blusas');

Route::get('pantalones', function () {
    $page="pantalones"; 
    return view('principal', compact('page'));
});
Route::get('accesorios', function () {
    $page="accesorios";
    return view('principal', compact('page'));
});

Route::get('login', function () {

    return view('login');
});