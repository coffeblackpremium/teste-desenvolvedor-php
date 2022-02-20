@extends('layout.main')

@section('content')
    <h1 class="title-table">Cadastro para Cliente</h1> 

    <div class="register-container">
        <form action="/clientes" method="POST" autocomplete="off">
        @csrf
            <div class="row">
                <div class="col-md-2">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="title" name="nome" placeholder="Digite o seu Nome" >
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" placholder="Digite o seu Email..">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" name="cpf" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})">
                    <input type="submit" id="button-register" class="btn btn-primary" value="Registrar Cliente">
                </div>
            </div>
        </form>
    </div>

@endsection