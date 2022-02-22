<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index(){
        $search = request('search');
        if($search) {
            
            $clientes = Cliente::where([
                ['nome', 'like', '%'.$search.'%']
            ])->get();
        
        } else {
            $clientes = Cliente::all();
        }

        $paginates = DB::table('clientes')->paginate(20);

        return view('clientes/index', ['clientes' => $clientes,'search'=>$search, 'paginate'=>$paginates]);
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

    public function destroy($id) {
        $cliente = Cliente::findOrFail($id)->delete();
        
        return redirect('clientes/tabela')->with('msg', 'O Cliente foi Excluido sucesso!');
    }


    public function edit($id) {
        $cliente = Cliente::findOrFail($id);
        return view('clientes.edit',['cliente'=>$cliente]);
    }

    public function update(Request $request){
        Cliente::findOrFail($request->id)->update($request->all());

        return redirect('clientes.index')->with('msg', 'Cliente editado com Sucesso!');
    }
}
