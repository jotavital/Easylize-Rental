@extends('layouts.main')

@section('title', 'Cadastro de empresa')

@section('content')

<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-5 d-flex justify-content-center flex-column">
        <h1 class="d-flex justify-content-center">Cadastre sua empresa</h1>

        <form action="/empresa/register" method="POST">
            @csrf
            <div class="mb-2 form-outline">
              <input type="text" id="nomeEmpresa" name="nomeEmpresa" class="form-control"/>
              <label class="form-label" for="nomeEmpresa">Nome da empresa</label>
            </div>
            <div class="mb-2 form-outline">
              <input type="text" id="loginEmpresa" name="loginEmpresa" class="form-control"/>
              <label class="form-label" for="loginEmpresa">Login</label>
            </div>
            <div class="mb-2 form-outline">
              <input type="password" id="password" class="form-control"/>
              <label class="form-label" for="password">Senha</label>
            </div>
            <div class="mb-2 form-outline">
              <input type="password" id="password" class="form-control"/>
              <label class="form-label" for="password">Confirme a senha</label>
            </div>
            <div class="mb-3 d-flex justify-content-center">
              <small>Sua empresa já tem um login? <a href="login">Entre aqui.</a></small>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-rounded">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

@endsection