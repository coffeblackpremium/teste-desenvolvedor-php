@extends('layout.main')

@section('title', 'Pedidos 🚚')

@section('content')
    <table class="table table-borderlss">
    <h1 class="title-table">Tabela de Pedidos</h1>
    <div class="table-container">
        <table class="table table-borderlss">
                <thead class="border-bottom font-weight-bold">
                    <tr>
                        <td>ID do Pedido</td>
                        <td>Nome do Cliente</td>
                        <td>Tipo do Produto</td>
                        <td>Nome do Produto</td>
                        <td>Data do Pedido</td>
                        <td><a href="/clientes/cadastro" class="btn btn-outline-success">
                                <i class="fas fa-plus"></i>Novo Registro para PEdido
                            </a>
                        </td>
                    </tr>
                </thead>
                @foreach($pedidos as $pedido)
                    <tr>
                        <td>{{$pedido->id}}</td>
                        <td>{{$pedido->Cliente->nome}}</a></td>
                        <td>{{$pedido->produto->tipoProduto}}</td>
                        <td>{{$pedido->produto->nomeProduto}}</td>
                        <td>{{$pedido->produto->create_at}}</td>
                        <td><a href="#"><button type="button" class="btn btn-primary">Visualizar</button></a></td>
                        <td><a href="#" ><button type="button" class="btn btn-success">Editar</button></a></td>
                        <td><a href="#"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                @endforeach
                    </tr>
            </table>
    </div>

@endsection