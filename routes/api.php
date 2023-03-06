<?php

use App\Http\Resources\PlatoResource;
use App\Http\Resources\RestauranteResource;
use App\Http\Resources\UserResource;
use App\Models\Plato;
use App\Models\Restaurante;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {

    return $request->user();

});




Route::middleware('auth:sanctum')->group(function () {
   
    //todos los restaurantes
    Route::get('asocrest/restaurantes',  function () {
        return RestauranteResource::collection(Restaurante::all());
    });


    Route::get('asocrest/platos/{id}',  function ($id) {
        return new PlatoResource(Plato::findOrFail($id));
    });

    Route::get('asocrest/clientes/{dni}',  function ($dni) {
        return new UserResource(User::findOrFail($dni));
    });



});

Route::post('/tokens/create', function (Request $request) {
  
    $user = User::where('email', $request->email)->first();
  
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['error' => 'Usuario o contraseña incorrectos']);
        /*
        throw ValidationException::withMessages([
          'email' => ['The provided credentials are incorrect.'],
        ]);
        */
    }

    $token = $user->createToken($request->email);
 
    return response()->json(['token' => $token->plainTextToken]);
});