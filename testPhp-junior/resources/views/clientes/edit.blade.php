@extends('layout.main')

@section('title', 'Editando: ')

@section('content')
    <form action="/clientes/update/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nome do Cliente</label>
            <input type="text" class="form-control" name="nome" id="nome" value="{{$cliente->nome}}" placeholder="Digite um Nome para o Cliente">
        </div>
        <div class="form-group">
            <label>Novo Email</label>
            <input type="text" class="form-control" name="email" id="nome" value="{{$cliente->email}}" placeholder="Digite o Email">
        </div>
        <div class="form-group">
            <label>CPF</label>
            <input type="text" class="form-control" name="cpf" id="nome" value="{{$cliente->cpf}}" placeholder="Digite o CPF">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" align="center">Editar</button>
        </div>
    </form>
@endsection