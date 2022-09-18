<?php

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
    return view('welcome');
});

Route::get('/perfil', function () {
  return view('app/perfil');
});
Route::get('/provisoes', function () {
  return view('app/provisoes');
});
Route::get('/alimentos/cadatro', function () {
  return view('app/cadastro_alimentos');
});

Route::get('/lista_compras', function () {
  return view('app/lista_compras');
});

Route::get('/teste', function () {
  return view('app/teste');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
