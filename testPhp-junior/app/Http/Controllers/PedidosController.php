<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// My model Local
use App\Models\Pedido;

class PedidosController extends Controller
{
    public function index() {
        $pedidos = Pedido::all();

        return view('pedidos.pedidosIndex', ['pedidos' => $pedidos]);
    }


    public function show($id) {
        $pedido = Pedido::findOrFail($id);
        $pedido->load('cliente', 'produto');

        return view('pedidos.pedidosShow', ['pedido'=>$pedido]);
    }
}
