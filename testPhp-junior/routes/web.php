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

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PedidosController;

//************** Pedidos Routes *************************/
Route::get('/', [PedidosController::class, 'index']);


//****************Clientes Routes ***********************/
Route::get('/clientes/tabela', [ClienteController::class, 'index']);
Route::get('/clientes/cadastro', [ClienteController::class, 'create']);
Route::get('/clientes/tabela/{id}', [ClienteController::class, 'show']);
Route::post('/clientes/tabela', [ClienteController::class, 'store']);
