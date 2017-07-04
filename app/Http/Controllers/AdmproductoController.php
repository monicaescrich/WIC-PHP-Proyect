<?php

namespace App\Http\Controllers;

use \App\Producto;
use \App\Categoria;

use Illuminate\Http\Request;

class AdmproductoController extends Controller
{
	public function index(){
		$productos = Producto::join('categorias','productos.id_categoria','=','categorias.id_categoria')
		->select('productos.id_producto','productos.nombre','categorias.descripcion as categoria','productos.precio','productos.descripcion', 'productos.disponible','productos.imagen')
		->paginate(5);


		return view('Admproducto.index')->with(['productos' => $productos]);
	}

	public function detalle($id){
		$categoria = new Categoria();
		$categorias = categoria::all();

		$producto = producto::where('id_producto', $id)
		->join('categorias','productos.id_categoria','=','categorias.id_categoria')
		->select('productos.id_producto','productos.nombre','categorias.descripcion as categoria','productos.precio','productos.descripcion', 'productos.disponible','productos.imagen')
		->first();
		
		return view('Admproducto.detalle')->with(['producto' => $producto]);
	}

	public function create(){
		$categoria = new Categoria();
		$categorias = categoria::all();

		return view('Admproducto.create')->with(['categorias'=>$categorias]);
	}
	public function store(Request $request){	
		//Estas validaciones se haran si no se ha creado un request php artisan make:request CreatePostProducto
		$this->validate($request, [
			'nombre' => 'required',
			'categoria' => 'required',
			'precio' => 'required',
			'descripcion'=>'required'
			]);

		//subir imagenes
		if ($request->file('picture')) {

			$file = $request->file('picture');
			$destinationPath = public_path('img');
			$originalFile = $file->getClientOriginalName();
			$file->move($destinationPath, $originalFile);
		}	
		
		$producto = new Producto;
		$producto->id_categoria = $request->get('categoria');
		$producto->nombre = $request->get('nombre');
		$producto->precio = $request->get('precio');
		$producto->imagen = $originalFile;
		$producto->disponible = $request->get('cantidad');

		$producto->descripcion = $request->get('descripcion');

		
				
		$producto->save();



		return redirect()->route('index_prod');

		dd($request->all());
	}

	public function edit($id){
	$producto = producto::where('id_producto', $id)->first();
	

	$categoria = new Categoria();
	$categorias = categoria::all();

	return view('Admproducto.edit')->with(['producto' => $producto, 'categorias'=> $categorias ]);
	}

	public function update($id, Request $request){
	$this->validate($request, [
			'nombre' => 'required',
			'id_categoria' => 'required',
			'precio' => 'required',
			'descripcion'=>'required'
			]);

	//dd($request->only('nombre','categoria','precio','cantidad','descripcion','imagen'));
	$producto = Producto::where('id_producto',$id)->update(
			$request ->only('nombre','id_categoria','precio','disponible','descripcion','imagen')
		);

	return redirect()->route('index_prod');
	}


	public function delete(Producto $id){
		$id->delete();

		return redirect()->route('index_prod');

	}

}
