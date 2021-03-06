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
    public function indexbuscar(Request $request)
    {      
       
        // return $request;
        if ($request) {
            $busqueda = trim($request->get('search'));
            $productoA = producto::where('Nombre', 'LIKE', '%' . $busqueda . '%')
                ->orderBy('id', 'asc')
                ->get();            
            return view('marco_americano', compact('productoA'));
            // return view('layout.carrito', compact('producto'));
        }
        // return  '<script language="javascript">alert("Error de autentificacion");window.location.href="index.html"</script>';
        // $producto = producto::all();

    }
    public function index()
    {
        $producto = producto::all();
        return view('marco_home', compact('producto'));
    }
    public function indexAMERICANO()
    {
        $productoA = producto::where('Nacionalidad', '=', 'EEUU')->get();
        // return $productoA;
        return view('marco_americano', compact('productoA'));
    }


    public function indexBRASILERO()
    {
        $productoB = producto::where('Nacionalidad', '=', 'Brasil')->get();
        return view('marco_brasilero', compact('productoB'));
    }


    public function indexN()
    {
        $productoN = producto::where('rango', '=', 'niño')->get();
        return view('marco_niño', compact('productoN'));
    }


    public function indexH()
    {
        $productoH = producto::where('rango', '=', 'hombre')->get();
        return view('marco_hombre', compact('productoH'));
    }


    public function indexM()
    {
        $productoM = producto::where('rango', '=', 'mujer')->get();
        return view('marco_mujer', compact('productoM'));
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
        $productoA = producto::where('id', '=', $id)->first();
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
