<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Restaurante;
use Illuminate\Http\Request;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.admin', [ 'restaurantes' => Restaurante::all() ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.formNuevoRestaurante');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
        $request->flash();

        $restaurante = new Restaurante();
        $restaurante->nombre = $request->input('nombre');
        $restaurante->direccion = $request->input('direccion');
        $restaurante->ciudad = $request->input('ciudad');
        $restaurante->telefono = $request->input('telefono');
        $restaurante->latitud = $request->input('latitud');
        $restaurante->longitud = $request->input('longitud');

        
        $restaurante->save();

        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show(Restaurante $restaurante)
    {
        return view('plato.plato', ['restaurantes' => $restaurante, 'platos' => $restaurante->platos()->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Restaurante $restaurante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Restaurante $restaurante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Restaurante $restaurante)
    {
        $restaurante->delete();
        return redirect('/admin');
    }
}
