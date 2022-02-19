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


Route::get('/', [PedidosController::class, 'index']);

Route::get('/clientes/tabela', [ClienteController::class, 'index']);
Route::get('/clientes/cadastro', [ClienteController::class, 'create']);
Route::post('/clientes/cadastro', [ClienteController::class, 'store']);
