@extends('layout.main')

@section('title', 'Clientes 🧍')
@section('content')
    <h1 class="title-table">Tabela de Clientes</h1>
    <div class="table-container">
        <table class="table table-borderlss">
                <thead class="border-bottom font-weight-bold">
                    <tr>
                        <td>ID do Cliente </td>
                        <td>Nome do Cliente</td>
                        <td>Email</td>
                        <td>CPF</td>
                        <td><a href="/clientes/cadastro" class="btn btn-outline-success">
                                <i class="fas fa-plus"></i>Novo Registro para Cliente
                            </a>
                        </td>
                    </tr>
                </thead>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->id}}</td>
                        <td>{{$cliente->nome}}</a></td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->cpf}}</td>
                @endforeach
                        <td>
                    </tr>
            </table>
    </div>

@endsection