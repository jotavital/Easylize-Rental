@extends('layouts.main')

@section('title', 'Cadastro')

@section('content')

<style>
    small {
        font-size: .8em;
    }
</style>

<div class="container col-md-12 d-flex justify-content-center">
    <div class="col-md-8 d-flex justify-content-center flex-column">

        <h1 class="mb-4 d-flex justify-content-center text-center">Cadastro</h1>

        <div class="col-md-12 d-flex justify-content-center">
            <form action="" id="registerForm" class="col-md-6 form-floating" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de usuário da empresa">
                    <small class="d-flex">Sua equipe usará este nome para acessar sua empresa. Ex.: easylizerental.com/<span class="text-success">nome_usuario </span></small>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha de acesso" required>
                </div>
                <div class="mb-3">
                    <label for="nome_empresa" class="form-label">Nome da empresa</label>
                    <input type="password" class="form-control" id="nome_empresa" name="nome_empresa" placeholder="Nome da empresa" required>
                </div>

                @if(session('message'))
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        <small>
                            <p class="p-0 m-0" style="text-align:center;">
                                {{ session('message') }}
                            </p>
                        </small>
                    </div>
                </div>
                @endif

                <div class="d-flex justify-content-center">
                    <button type="submit" class="mt-3 btn btn-success btn-rounded">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

<script>
    window.onload = function() {

        var usuarioInput = document.getElementById('usuario');

        function verifyUsername() {

            $.ajax({
                url: "/verifyUsername",
                type: "post",
                data: {
                    usuario: $(usuarioInput).val(),
                },
                dataType: "json",
                success: function(response) {
                    alert(response);
                }
            });
        }

        const minLenght = 5;

        usuarioInput.onblur = function() {
            if ($(usuarioInput).val().length > minLenght) {
                verifyUsername();
            }
        }

    }
</script>