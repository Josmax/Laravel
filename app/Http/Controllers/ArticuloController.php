<?php

namespace App\Http\Controllers;

//use App\Articulo;
use App\Models\Articulo;
use App\Models\Categoria;
use Illuminate\Http\Request;


class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $datos['articulos']=Articulo::paginate(7); 
        return view('articulo.index', $datos);
        */
        $articulos=Articulo::all();
        return view('articulo.index', compact('articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias=Categoria::all();
        return view('articulo.create', compact('categorias')); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = request()->except('_token');
        
        
        Articulo::insert($datos);
        //Articulo::create($datos);
        
        //return response()->json($datos);

        /*
        $articulo = new Articulo;
        $articulo->name = $request->name;
        $articulo->description = $request->description;
        $articulo->save();
        return redirect('');
        */
        return  redirect('articulo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function show(Articulo $articulo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categorias=Categoria::all();
        $articulo=Articulo::findOrFail($id);
        return view('articulo.edit', compact('categorias'), compact('articulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos = request()->except(['_token', '_method']);
        Articulo::where('id', '=', $id)->update($datos);
        $categorias=Categoria::all();
        $articulo=Articulo::findOrFail($id);
        return view('articulo.edit', compact('categorias'), compact('articulo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Articulo  $articulo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articulo::destroy($id);
        return  redirect('articulo');
    }
}
