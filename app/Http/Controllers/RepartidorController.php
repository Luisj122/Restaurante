<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Repartidor;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class RepartidorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(User $repartidor)
    {
        return view("repartidor.repartidor", ['repartidores'=>Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('repartidor.detallePedido', ['repartidores'=>Auth::user(), 'pedidos' => Pedido::all(), 'users'=>User::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Repartidor $repartidor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Repartidor $repartidor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Repartidor $repartidor)
    {
        //
    }
}
