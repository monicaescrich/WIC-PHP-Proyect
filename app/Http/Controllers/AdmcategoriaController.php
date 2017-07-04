<?php

namespace App\Http\Controllers;

use \App\Categoria;
use \App\Tipo;

use Illuminate\Http\Request;

class AdmcategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoria = Categoria::join('tipo','categorias.id_tipo','=','tipo.id_tipo')
        ->select('categorias.id_categoria','tipo.descripcion as tipo','categorias.descripcion')
        ->paginate(5) ;


        return view('Admcategoria.index')->with(['categorias' => $categoria]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo = new Tipo();
        $tipos = tipo::all();

        return view('Admcategoria.create')->with(['tipos'=>$tipos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Estas validaciones se haran si no se ha creado un request php artisan make:request CreatePostProducto

        $this->validate($request, [
            'nombre' => 'required',
            ]);

        
        $categoria = new Categoria;
        $categoria->id_tipo = $request->get('tipo');
        $categoria->descripcion = $request->get('nombre');
                
        $categoria->save();

        return redirect()->route('index_categ');

        dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function detalle($id)
    {

        $tipo = new Tipo();
        $tipos = tipo::all();

        $categoria = categoria::where('categorias.id_tipo', $id)
        ->join('tipo','categorias.id_tipo','=','tipo.id_tipo')
        ->select('categorias.id_categoria','tipo.descripcion as tipo','categorias.descripcion')
        ->first();
        

        return view('Admcategoria.detalle')->with(['categorias' => $categoria]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias = categoria::where('id_categoria', $id)->first();

        $tipos = tipo::all();

    return view('Admcategoria.edit')->with(['categorias' => $categorias, 'tipos'=> $tipos ]);
    
    }

    public function update($id, Request $request){
            //dd($request->all());
            $this->validate($request, [
                'descripcion' => 'required',
            ]);

            $categoria = Categoria::where('id_categoria',$id)->update(
                $request ->only('id_tipo','descripcion')
            );

            return redirect()->route('index_categ');

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Categoria $id)
    {
        $id->delete();

        return redirect()->route('index_categ');
    }
}
