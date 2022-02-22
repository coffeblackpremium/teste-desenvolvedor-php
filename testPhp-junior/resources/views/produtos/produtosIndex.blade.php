@extends('layout.main')

@section('content')
<table class="table table-borderlss">
    <h1 class="title-table">Todos os Produtos</h1>
    <div class="table-container">
        <table class="table table-borderlss">
                <thead class="border-bottom font-weight-bold">
                    <tr>
                        <td>ID do Produto</td>
                        <td>Nome do Produto</td>
                        <td>Tipo do Produto</td>
                        <td>Valor</td>
                        <td>Estoque</td>
                        <td>Codigo de Barras</td>
                        <td>Data do Produto</td>
                        <td><a href="/clientes/cadastro" class="btn btn-outline-success">
                                <i class="fas fa-plus"></i>Adicionar Produto
                            </a>
                        </td>
                    </tr>
                </thead>
                @foreach($produtos as $produto)
                    <tr>
                        <td>{{$produto->id}}</td>
                        <td>{{$produto->nomeProduto}}</a></td>
                        <td>{{$produto->tipoProduto}}</td>
                        <td>{{$produto->valorProduto}}</td>
                        <td>{{$produto->estoque}}</td>
                        <td>{{$produto->codBarras}}</td>
                        <td>{{$produto->update_at}}</td>
                        <td><a href="#"><button type="button" class="btn btn-primary">Visualizar</button></a></td>
                        <td><a href="#" ><button type="button" class="btn btn-success">Editar</button></a></td>
                        <td><a href="#"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                @endforeach
                {{$paginates->links()}}
                    </tr>
            </table>
    </div>

@endsection