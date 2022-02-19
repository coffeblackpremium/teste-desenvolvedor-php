@extends('layout.main')

@section('title', 'Pedidos 🚚')

@section('content')
    <table class="table table-borderlss">
        <thead class="border-bottom font-weight-bold">
            <tr>
                <td>Nome do Cliente</td>
                <td>Nome do Produto</td>
                <td>Valor Unitario</td>
                <td>Quantidade</td>
                <td>Data</td>
                <td>
                    <a href="#" class="btn btn-outline-success">
                        <i class="fas fa-plus"></i>Novo Registro
                    </a>
                </td>
            </tr>
        </thead>
        
    </table>

@endsection