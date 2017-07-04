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
Route::get('carrito/{id}','carritoController@deleteCarrito');

//Pantalones
Route::get('pantalones', 'ProductsController@pantalones');
Route::post('pantalones', 'ProductsController@addPantalones');

//Accesorios
Route::get('accesorios', 'ProductsController@accesorios');
Route::post('accesorios', 'ProductsController@addAccesorios');




//productos
Route::resource('admin','AdmproductoController');

Route::group(['middleware'=>'auth'], function() {
	Route::get('admin','AdmproductoController@index');

	Route::name('index_prod')->get('admproducto/','AdmproductoController@index');
	Route::name('detalle_prod')->get('/admproducto/detalle/{id}','AdmproductoController@detalle');

	Route::get('/admproducto/create','AdmproductoController@create');
	Route::name('store_post_prod')->post('admproducto','AdmproductoController@store');

	Route::name('edit_post_prod')->get('/admproducto/edit/{id}','AdmproductoController@edit');
	Route::name('update_post_prod')->put('/admproducto/{id}','AdmproductoController@update');

	Route::name('delete_post_prod')->delete('admproducto/{id}','AdmproductoController@delete');
});

//categorias
Route::resource('admin','AdmcategoriaController');

Route::group(['middleware'=>'auth'], function() {

	Route::name('index_categ')->get('admcategoria/','AdmcategoriaController@index');
	
	Route::name('detalle_categ')->get('/admcategoria/detalle/{id}','AdmcategoriaController@detalle');

	Route::get('/admcategoria/create','AdmcategoriaController@create');
	Route::name('store_post_categ')->post('admcategoria','AdmcategoriaController@store');

	Route::name('edit_post_categ')->get('/admcategoria/edit/{id}','AdmcategoriaController@edit');
	Route::name('update_post_categ')->put('/admcategoria/{id}','AdmcategoriaController@update');

	Route::name('delete_post_categ')->delete('admcategoria/{id}','AdmcategoriaController@delete');
});

//////////////////////////////////////////////////////////////////////////////

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');