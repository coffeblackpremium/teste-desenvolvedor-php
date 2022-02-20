<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $clientes = Cliente::all();

        return view('clientes/index', ['clientes' => $clientes]);
    }

    public function create(){
        return view('clientes.create');
    }

    public function store(Request $request){
        $cliente = new Cliente;

        $cliente->nome = $request->nome;
        $cliente->email = $request->email;
        $cliente->cpf = $request->cpf;

        $cliente->save();
        return redirect('/clientes/tabela')->with('msg', 'Cliente cadastrado com Sucesso!');
    }

    public function show($id) {

        $cliente = Cliente::findOrFail($id);
        
        return view('clientes.show', ['cliente'=>$cliente]);
    }
}
