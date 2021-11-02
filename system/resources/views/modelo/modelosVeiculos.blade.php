<?php

use App\Models\ModeloVeiculo;
use Illuminate\Support\Facades\Session;

$modelos = ModeloVeiculo::all();

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

        <section class="mb-3">
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
                <div class="form-row mb-3 col-12 d-flex justify-content-center">
                    <div class="mt-4 input-group col-md-4">
                        <label for="fotosInput" aria-describedby="fotosInput">Fotos <span class="text-danger">(Máximo: 10 fotos)</span></label>
                        <input type="file" class="form-control-file" id="fotosInput" name="fotosInput[]" accept="image/*" multiple="multiple">
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" id="btnSubmit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
                </div>
            </form>
        </section>

        <div class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableModelos">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ano</th>
                    <th>Motor</th>
                    <th>Marca</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($modelos as $modelo)
                    <tr>
                        <td> {{ $modelo->id }} </td>
                        <td> {{ $modelo->nome }} </td>
                        <td> {{ $modelo->ano_modelo }} </td>
                        <td> {{ $modelo->motor }} </td>
                        <td> {{ $modelo->marca->nome }} </td>
                        <td>
                            <x-acoes-tabela id="{{ $modelo->id }}" :rotaEditar="route('modelos.edit', $modelo->id)" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('script')

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    var tableModelosObj;

    window.onload = function() {
        tableModelosObj = $('#tableModelos').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });

        PopularSlimSelectsObj = new PopularSlimSelects();

        //! popular select marca
        var dataAjaxMarca = {
            "_token": "{{ csrf_token() }}"
        };
        PopularSlimSelectsObj.popularSlimSelectAjaxBasico("{{ route('marcas.all.get') }}", "#marcaSelect", "id", "nome", dataAjaxMarca);
    }
</script>

@endsection