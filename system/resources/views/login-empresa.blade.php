<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

$message = Session::get('message');

echo "logada? -> " . Auth::guard('company')->check();
echo DB::getDefaultConnection();
?>

@extends('layouts.main')

@section('title', 'Login')

@section('content')

<div class="content d-flex align-items-center" style="height:100vh;">
    <div class="container-fluid">

        <h1 class="mb-4 text-center">Login da Empresa</h1>
        <form action="{{ route('company.login.do') }}" class="col-12 form-floating" method="POST">
            @csrf
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <div class="mb-3">
                        <label for="login">Login (nome de usuário da empresa)</label>
                        <input type="text" class="form-control" id="login" name="login" placeholder="Usuario" required>
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

            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-rounded">Próximo</button>
            </div>
        </form>
    </div>
</div>

@endsection