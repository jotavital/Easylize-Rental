@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-5 d-flex justify-content-center flex-column">
        <h1 class="d-flex justify-content-center">Login</h1>

        <form action="#" method="post">
            <div class="form-outline">
              <input type="text" id="usuario" class="form-control"/>
              <label class="form-label" for="usuario">Usuário</label>
            </div>
            <br>
            <div class="form-outline">
              <input type="password" id="senha" class="form-control"/>
              <label class="form-label" for="senha">Senha</label>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-rounded">Entrar</button>
            </div>
        </form>
    </div>
</div>

@endsection