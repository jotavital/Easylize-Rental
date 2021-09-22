<?php

use App\Models\System\Company;
use Illuminate\Support\Facades\Session;

$companyData = Company::where('email', Session::get('email'))->get()->first();

?>

@extends('layouts.main')

@section('title', 'Login')

@section('content')


<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-8 d-flex justify-content-center flex-column">

        <h1 class="mb-4 d-flex justify-content-center">Login - {{ $companyData->nome_empresa }}</h1>

        <div class="col-md-12 d-flex justify-content-center">
            <form action="{{ route('admin.login.do') }}" class="col-md-6 form-floating" method="POST">
                @csrf
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                    <label for="email">E-mail</label>
                </div>
                <div class="form-floating mb-4">
                    <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
                    <label for="senha">Senha</label>
                </div>

                @if(session('message'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        <small>
                            <p class="p-0 m-0" style="text-align:center;">
                                {{session('message')}}
                            </p>
                        </small>
                    </div>
                </div>
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
</div>

@endsection