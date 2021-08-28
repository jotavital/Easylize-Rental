@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-5 d-flex justify-content-center flex-column">
        <h1 class="d-flex justify-content-center">Login - nomeEmpresa</h1>

        <form action="#" method="post">
            <div class="mb-2 form-outline">
              <input type="text" id="usuario" class="form-control"/>
              <label class="form-label" for="usuario">Usuário</label>
            </div>
            <div class="mb-4 form-outline">
              <input type="password" id="senha" class="form-control"/>
              <label class="form-label" for="senha">Senha</label>
            </div>
            <!-- <div class="mb-3 d-flex justify-content-center">
              <small>Ainda não tem um login? <a href="register">Cadastre-se aqui.</a></small>
            </div> -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-rounded">Entrar</button>
            </div>
        </form>
    </div>
</div>

@endsection