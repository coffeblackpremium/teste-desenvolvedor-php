@extends('layout.main')

@section('title', 'Pagina do Cliente')

@section('content')
    <hr>
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <p>Seu nome: {{$cliente->nome}}</p>
            <p>Seu Numero de CPF é: {{$cliente->cpf}}</p>
            <p>Seu Email: {{$cliente->email}}</p>
        </div>
    </div>

@endsection