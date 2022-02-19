<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        return view('clientes/cliente', ['clientes' => $clientes]);
    }

    public function create(){
        return view('clientes.cadastroCliente');
    }

    public function store(Request $request){
        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->cpf = $request->cpf;

        $cliente->save();
        return redirect('/clientes/tabela');
    }

}
