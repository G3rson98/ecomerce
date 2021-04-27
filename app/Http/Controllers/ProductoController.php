<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto =producto::all();
        // return $productos[1];
        return view('marco_home', compact('producto'));
    }


    public function indexAMERICANO()
    {
        $productoA =producto::where('Nacionalidad', '=','EEUU')->get();
        return view('marco_americano', compact('productoA'));
    }


    public function indexBRASILERO()
    {
        $productoB=producto::where('Nacionalidad', '=','brasil')->get();
        return view('marco_brasilero', compact('productoB'));
    }


    public function indexN()
    {
        $productoN=producto::where('Categoria_Edad','=','niño')->get();
        return view('marco_niño', compact('productoN'));
    }


    public function indexH()
    {
        $productoH=producto::where('Categoria_Edad','=','adultos')->get();
        return view('marco_hombre', compact('productoH'));
    }


    public function indexM()
    {
        $productoM=producto::where('Categoria_Edad','=','Mujer')->get();
        return view('producto_Mujer', compact('productoM'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productoA =producto::where('id', '=',$id)->first();
        return $productoA;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
