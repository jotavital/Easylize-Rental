<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');
?>

@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

<div class="content d-flex align-items-center" style="height:100vh;">
    <div class="container-fluid">

        <h1 class="mb-4 text-center">Cadastro</h1>
        <form action="{{ route('companies.store') }}" id="registerForm" class="col-12 needs-validation" method="POST" novalidate>
            @csrf
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de usuário da empresa" required>
                    <div class="invalid-feedback" id="invalid-usuario">

                    </div>
                    <small class="form-text text-muted">
                        Sua equipe usará este nome para acessar sua empresa. Ex.: easylizerental.com/nome_usuario
                    </small>
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha de acesso" required>
                    <div class="invalid-feedback" id="invalid-senha">

                    </div>
                    <small class="form-text text-muted">
                        Seu primeiro login será realizado com os dados acima
                    </small>
                </div>
            </div>
            <div class="form-row d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="nome_empresa" class="form-label">Nome da empresa</label>
                    <input type="text" class="form-control" id="nome_empresa" name="nome_empresa" placeholder="Nome da empresa" required>
                    <div class="invalid-feedback" id="invalid-senha">
                        Preencha este campo.
                    </div>
                </div>
            </div>

            @if(session('success'))
            <x-alert type="success" :message='$success' />
            @elseif(session('error'))
            <x-alert type="danger" :message='$error' />
            @endif

            <div class="d-flex justify-content-center">
                <button type="submit" class="mt-3 btn btn-success btn-rounded">Cadastrar</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('script')

<script>
    window.onload = function() {
        var usuarioInput = document.getElementById('usuario');
        var senhaInput = document.getElementById('senha');
        var usuarioInputValue;
        var senhaInputValue;
        var invalidFeedbackUsernameDiv = document.getElementById('invalid-usuario');
        var invalidFeedbackUsernameTooShort = document.createTextNode('O nome de usuário é muito curto.');
        var invalidFeedbackUsernameExists = document.createTextNode('O nome de usuário já existe.');
        var invalidFeedbackSenhaDiv = document.getElementById('invalid-senha');
        var invalidFeedbackSenhaTooShort = document.createTextNode('A senha é muito curta. Mínimo 8 caracteres.');
        var companies;
        const passwordMinLenght = 8;
        var VerifyCompanyUsernameObj = new VerifyCompanyUsername();

        $.ajax({
            url: "/companies/getAll",
            type: "post",
            async: false,
            data: {},
            dataType: "json",
            success: function(response) {
                companies = response;
            }
        });

        function verifyUsername(usuarioInputValue) {
            var usernameTooShort = VerifyCompanyUsernameObj.usernameTooShort(usuarioInput);
            var userNameExists = VerifyCompanyUsernameObj.usernameExists(companies, usuarioInputValue);

            invalidFeedbackUsernameDiv.innerHTML = '';
            usuarioInput.classList.remove('is-valid');
            if (usernameTooShort) {
                usuarioInput.classList.add('is-invalid');
                invalidFeedbackUsernameDiv.appendChild(invalidFeedbackUsernameTooShort);
            } else if (userNameExists) {
                usuarioInput.classList.add('is-invalid');
                invalidFeedbackUsernameDiv.appendChild(invalidFeedbackUsernameExists);
            } else {
                usuarioInput.classList.remove('is-invalid');
                usuarioInput.classList.add('is-valid');
            }

        }

        usuarioInput.onblur = function() {
            usuarioInputValue = $(usuarioInput).val();

            verifyUsername(usuarioInputValue);
        }

        senhaInput.onblur = function() {

            invalidFeedbackSenhaDiv.innerHTML = '';
            if ($(senhaInput).val().length < passwordMinLenght) {
                senhaInput.classList.remove('is-valid');
                senhaInput.classList.add('is-invalid');
                invalidFeedbackSenhaDiv.appendChild(invalidFeedbackSenhaTooShort);
            } else {
                senhaInput.classList.remove('is-invalid');
                senhaInput.classList.add('is-valid');
            }
        }

    }
</script>

@endsection