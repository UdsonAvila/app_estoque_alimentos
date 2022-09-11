<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AlimentosController;
use App\Http\Controllers\EstoqueHasAlimmentosController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\NivelController;
use App\Http\Controllers\ProvisaoController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResource('usuario', UsuarioController::class);
Route::apiResource('alimentos', AlimentosController::class);
Route::apiResource('controle_estoque', EstoqueHasAlimmentosController::class);
Route::apiResource('grupo', GrupoController::class);
Route::apiResource('nivel', NivelController::class);
Route::apiResource('provisao', ProvisaoController::class);