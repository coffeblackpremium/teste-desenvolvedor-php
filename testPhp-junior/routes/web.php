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
use App\Http\Controllers\ProdutosController;

//************** Pedidos Routes *************************/
Route::get('/', [PedidosController::class, 'index']);
Route::get('/pedidos/{id}', [PedidosController::class, 'show']);


//****************Clientes Routes ***********************/
Route::controller(ClienteController::class)->group(function() {
    Route::get('/clientes/tabela', [ClienteController::class, 'index']);
    Route::get('/clientes/cadastro', [ClienteController::class, 'create']);
    Route::get('/clientes/tabela/{id}', [ClienteController::class, 'show']);
    Route::post('/clientes', [ClienteController::class, 'store']);

});
/* Produtos Routes */
Route::get('/produtos', [ProdutosController::class, 'index']);