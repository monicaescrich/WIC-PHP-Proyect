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

 
//Categorias
Route::get('/', 'CategoriesController@index');


//Blusas
Route::get('blusas', 'ProductsController@blusas');
Route::post('blusas', 'ProductsController@addBlusas');

//Carrito
Route::get('carrito','carritoController@getCarrito');

//Pantalones
Route::get('pantalones', 'ProductsController@pantalones');
Route::post('pantalones', 'ProductsController@addPantalones');

//Accesorios
Route::get('accesorios', 'ProductsController@accesorios');
Route::post('accesorios', 'ProductsController@addAccesorios');

