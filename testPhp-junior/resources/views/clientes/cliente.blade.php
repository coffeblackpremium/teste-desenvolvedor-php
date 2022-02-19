@extends('layout.main')


@section('content')
<h1>Tabela de Clientes</h1>
<table class="table table-borderlss">
        <thead class="border-bottom font-weight-bold">
            <tr>
                <td>Nome do Cliente</td>
                <td>Email</td>
                <td>CPF</td>
                <td>Quantidade</td>
                <td>Data</td>
                <td>
                    <a href="#" class="btn btn-outline-success">
                        <i class="fas fa-plus"></i>Novo Registro para Cliente
                    </a>
                </td>
            </tr>
        </thead>
        
    </table>

@endsection