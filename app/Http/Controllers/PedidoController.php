<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Plato;
use App\Models\Platos_Pedidos;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Restaurante $restaurante)
    {
        //return (Platos_Pedidos::all());
        return view('plato.pedido', ['restaurantes'=> $restaurante, 'platos' => Plato::all(),'pedidos' => Pedido::all(), 'users' => User::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(User $user, Plato $plato )
    {
    
        return view('plato.formPedido', ['platos' => $plato, 'users' => $user]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Plato $plato)
    {
        $request->flash();

        $pedido = new Pedido();
        $pedido->cliente_id = $request->input('cliente_id');
        $pedido->restaurante_id = $request->input('restaurante_id');
        $pedido->repartidor_id = $request->input('repartidor_id');
        $pedido->estado = $request->input('estado');
    
       
        $pedido->save();


        //return ($pedido->id . $plato->id);
        $pedido->platos()->attach($plato->id);
        return redirect('/plato');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createRepartidor(Restaurante $restaurante)
    {

        return view('plato.formRepartidores', ['users' => User::all(), 'restaurantes'=>$restaurante]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeRepartidor(Request $request, Restaurante $restaurante)
    {
        $id = $request->input('id');
        $repartidorUpdate = User::find($id);
        $repartidorUpdate->rol = $request->input('rol');
        $repartidorUpdate->salario = $request->input('salario');
        $repartidorUpdate->estado = $request->input('estado');

        $repartidorUpdate->save();

        return view('plato.repartidores', ['restaurantes' => $restaurante, 'users'=>User::all()]);
        
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        $pedidoUpdate = Pedido::find($pedido->id);
        $pedidoUpdate->estado = $request->input('estado');

        $pedidoUpdate->save();

        return back(); 

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function repartidores(Restaurante $restaurante)
    {
        return view('plato.repartidores', ['restaurantes' => $restaurante, 'users'=>User::all()]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyRepartidor(User $user, Restaurante $restaurante)
    {

        $delRepartidor = User::find($user->id);
        $delRepartidor->rol = "cliente";
        $delRepartidor->salario = null;
        $delRepartidor->estado = null;

        $delRepartidor->save();

        return back(); 

    }

    /**
     * Update the specified resource in storage.
     */
    public function updateRepartidor(Request $request, User $user)
    {
        $repartidorUpdate = User::find($user->id);
        $repartidorUpdate->nombre = $request->input('nombre');
        $repartidorUpdate->apellido = $request->input('apellido');
        $repartidorUpdate->dni = $request->input('dni');
        $repartidorUpdate->email = $request->input('email');
        $repartidorUpdate->direccion = $request->input('direccion');
        $repartidorUpdate->ciudad = $request->input('ciudad');
        $repartidorUpdate->telefono = $request->input('telefono');
        $repartidorUpdate->salario = $request->input('salario');
        $repartidorUpdate->estado = $request->input('estado');

        $repartidorUpdate->save();

        return back(); 

        
    }


    

    /**
     * Remove the specified resource from storage.
     */
    public function indexPedido(Pedido $pedido)
    {
        
    }
}
