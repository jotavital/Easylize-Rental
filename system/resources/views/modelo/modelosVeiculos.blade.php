<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');
?>

@extends('layouts.adminLayout')

@section('title', 'Modelos')

@section('contentTitle', 'Modelos de veículos')

@section('frota-menu-active', 'active')
@section('modelos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message='$success' />
        @elseif(session('error'))
        <x-alert type="danger" :message='$error' />
        @endif

        <form action=" {{ route('modelos.store') }} " method="POST" enctype="multipart/form-data" class="col-12 needs-validation" id="formAddModelo" novalidate>
            @csrf
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-md-4">
                    <label for="anoModeloSelect">Ano do modelo <span class="text-danger">*</span></label>
                    <select id="anoModeloSelect" name="anoModeloSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>

                        <?php
                        foreach (range(date('Y') + 3, 1900) as $year) {
                        ?>

                            <option value="<?= $year ?>"><?= $year ?></option>

                        <?php
                        }
                        ?>

                    </select>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <label for="motorModeloInput">Motor <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-md-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="mt-4 input-group col-md-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotosInput" name="fotosInput[]" accept="image/*" multiple="multiple">
                        <label class="custom-file-label" for="fotosInput" aria-describedby="fotosInput">Fotos</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
            </div>
        </form>

    </div>
</div>

@endsection

@section('script')

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>

    window.onload = function() {
        PopularSlimSelectsObj = new PopularSlimSelects();

        //! popular select marca
        var dataAjaxMarca = {
            "_token": "{{ csrf_token() }}"
        };
        PopularSlimSelectsObj.popularSlimSelectBasico("{{ route('marcas.all.get') }}", "#marcaSelect", "id", "nome", dataAjaxMarca);
    }
</script>

@endsection