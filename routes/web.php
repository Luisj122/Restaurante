<?php

use App\Http\Controllers\PedidoController;
use App\Http\Controllers\PlatoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RepartidorController;
use App\Http\Controllers\RestauranteController;
use App\Models\Plato;
use App\Models\Repartidor;
use App\Models\Restaurante;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome', ['platos' => Plato::all(), 'restaurantes' => Restaurante::all()]);
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::middleware(['auth', 'rol:repartidor'])->group(function () {
        Route::get('/repartidor', [RepartidorController::class, 'index']);
        Route::get('/repartidor/detalle', [RepartidorController::class, 'show']);
    });
    

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/plato', [PlatoController::class, 'indexPedido']);
    Route::get('/pedido/{user}/restaurante/{plato}', [PedidoController::class, 'create']);
    Route::post('/pedido/store/{plato}' , [PedidoController::class, 'store']);

});

Route::middleware(['auth', 'rol:admin'])->group(function () {
    //Rutas protegidas para admin
    Route::get('/admin', [RestauranteController::class, 'index']);
    Route::get('/restaurante/nuevo', [RestauranteController::class, 'create']);
    Route::post('/restaurante/store' , [RestauranteController::class, 'store']);
    Route::get('/restaurante/borrar/{restaurante}' , [RestauranteController::class, 'destroy']);
    Route::get('/restaurante/detalle/{restaurante}' , [RestauranteController::class, 'show']);

    Route::get('/plato/nuevo/{restaurantes}', [PlatoController::class, 'create']);
    Route::post('/plato/store/{restaurantes}' , [PlatoController::class, 'store']);
    Route::get('/plato/borrar/{plato}/{restaurante}' , [PlatoController::class, 'destroy']);
    Route::get('/plato/detalle/{plato}/{restaurante}' , [PlatoController::class, 'show']);

    Route::get('/pedido/detalle/{restaurante}', [PedidoController::class, 'index']);
    Route::get('/pedido/borrar/{pedido}', [PedidoController::class, 'indexPedido']);
    Route::post('/pedido/update/estado/{pedido}', [PedidoController::class, 'update']);

    Route::get('/repartidor/{restaurante}', [PedidoController::class, 'repartidores']);
    Route::get('/repartidor/borrar/{user}/{restaurante}', [PedidoController::class, 'destroyRepartidor']);
    Route::post('/repartidor/update/{user}',  [PedidoController::class, 'updateRepartidor']);
    Route::get('/repartidor/nuevo/nuevo/{restaurante}', [PedidoController::class, 'createRepartidor']);
    Route::post('/repartidor/store/{restaurante}', [PedidoController::class, 'storeRepartidor']);

});

// Route::get('/', [PlatoController::class, 'index']);

require __DIR__.'/auth.php';
