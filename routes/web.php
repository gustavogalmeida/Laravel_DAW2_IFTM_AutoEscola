<?php

use Illuminate\Support\Facades\Route;
use App\hTTP\Controllers\CarroController;

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
Route::get('/autoescola', [CarroController::class, "index"]); // quando acessar o /altoescola ele vai usar o get chamando a classe index do controller
Route::post('/autoescola', [CarroController::class, "salvar"]); // quando usar o submit dentro da pag /autoescola chama classe salvar do controller
Route::get('/autoescola/editar/{id}', [CarroController::class, "editar"]); // quando chamar editar passando id chama classe editar do controller
Route::get('/autoescola/excluir/{id}', [CarroController::class, "excluir"]); // quando chamar excluir passando id chama classe editar do controller

Route::get('/', function () {
    return view('welcome');
});
