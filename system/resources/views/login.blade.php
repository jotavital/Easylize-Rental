@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div class="container col-md-12 d-flex justify-content-center">
  <div class="col-md-5 d-flex justify-content-center flex-column">
    <h1 class="mb-4 d-flex justify-content-center">Login - Easylize Rental</h1>

    <form action="/auth" method="POST">
      @csrf
      <div class="mb-3 form-outline">
        <input type="email" id="email" name="email" class="form-control" required />
        <label class="form-label" for="email">E-mail</label>
      </div>
      <div class="mb-4 form-outline">
        <input type="password" id="senha" name="senha" class="form-control" required />
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