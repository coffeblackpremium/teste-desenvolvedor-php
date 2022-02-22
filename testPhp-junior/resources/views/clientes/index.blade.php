@extends('layout.main')

@section('title', 'Clientes 🧍')
@section('content')
    <h1 class="title-table">Tabela de Clientes</h1>
    <div class="container-search">
        <form action="/clientes/tabela" method="GET">
            <input type="text" name="search" class="form-control" placeholder="Digite o nome ou CPF">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>

    

    <div class="table-container">
        <table class="table table-borderlss">
            @if($search)
            <tr>
                <h2 style="margin: 20px, 0, 20px, 0;">Você buscou por: {{$search}} ..</h2>
            @endif
            </tr>
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
                        <td><a href="/clientes/tabela/{{$cliente->id}}"><button type="button" class="btn btn-primary">Visualizar</button></a></td>
                        <td><a href="/clientes/edit/{{$cliente->id}}" ><button type="button" class="btn btn-success">Editar</button></a></td>
                        <td><form action="/clientes/{{$cliente->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                        </td>
                @endforeach
                    {{$paginate->links()}}
                    </tr>
            </table>
    </div>

@endsection