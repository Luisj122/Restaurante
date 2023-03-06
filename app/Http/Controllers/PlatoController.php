<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Plato;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {       
        return view('plato.plato', [ 'platos' => Plato::all()]);
    }

    /**
     * Display a listing of the resource.
     */
    public function indexPedido()
    {       
        return view('plato.viewPlato', [ 'platos' => Plato::all(), "restaurantes" => Restaurante::all()]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create(Restaurante $restaurantes)
    {
        return view('plato.formNuevoPlato', ['restaurantes' => $restaurantes]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Restaurante $restaurante)
    {
        $request->flash();

        $plato = new Plato();
        $plato->nombre = $request->input('nombre');
        $plato->descripcion = $request->input('descripcion');
        $path = $request->file('foto')->store('public');
        $plato->foto =  str_replace('public', 'storage', $path);
        $plato->precio = $request->input('precio');
        $plato->retaurante_id = $request->input('restaurante_id');
       
        $plato->save();

        $restaurante->id = $request->input('restaurante_id');
        return view('plato.plato', ['restaurantes' => $restaurante, 'platos' => $restaurante->platos()->get()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plato $plato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plato $plato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plato $plato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plato $plato, Restaurante $restaurante)
    {
        $plato->delete();
        return back();
    }
}
