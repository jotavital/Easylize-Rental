<?php

use Illuminate\Support\Facades\Session;

$message = Session::get('message');
?>

@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div class="content d-flex align-items-center" style="height:100vh;">
    <div class="container-fluid">

        <h1 class="mb-4 text-center">Logsin - {{ isset($_COOKIE['nome_empresa']) ? $_COOKIE['nome_empresa'] : "Easylize Rental" }} </h1>
        <form action="{{ route('admin.login.do') }}" class="col-12 form-floating" method="POST">
            @csrf
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <div class="mb-3">
                        <label for="login">Usuário</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                    </div>
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <div class="mb-4">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    </div>
                </div>
            </div>

            @if(session('message'))
            <x-alert type="danger" :message='$message' />
            @endif
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