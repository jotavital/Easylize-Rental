<?php

use App\Models\MarcaVeiculo;
use App\Models\ModeloVeiculo;
use App\Models\TipoCategoria;

$marcas = MarcaVeiculo::all();
$categorias = TipoCategoria::find(1)->categorias;
$modelos = MarcaVeiculo::find($veiculo->marca->id)->modelos;
?>

@extends('layouts.adminLayout')

@section('title', 'Editar veículo')

@section('contentTitle', 'Editar veículo')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">

    <div class="container-fluid">
        <form action=" {{ route('veiculos.update', $veiculo->id) }} " method="POST" class="col-12 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Placa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="placaInput" name="placaInput" placeholder="Placa do veículo" maxlength="8" required value="{{ $veiculo->placa }}">
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-5">
                    <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="chassiInput" name="chassiInput" placeholder="Número do chassi" maxlength="17" required value="{{ $veiculo->chassi }}">
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="renavamInput" name="renavamInput" placeholder="Código Renavam" maxlength="11" required value="{{ $veiculo->renavam }}">
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                        @foreach($marcas as $marca)
                        <option value="{{ $marca->id }}" {{ ($marca->id == $veiculo->marca->id) ? "selected" : "" }}> {{ $marca->nome }} </option>
                        @endforeach
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                    <select id="modeloSelect" name="modeloSelect" class="validate-select" required>
                        @foreach($modelos as $modelo)
                        <option value="{{ $modelo->id }}" {{ ($modelo->id == $veiculo->modelo->id) ? "selected" : "" }}> {{ $modelo->nome }} </option>
                        @endforeach
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="corInput">Cor <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="corInput" name="corInput" placeholder="Cor" required value="{{ $veiculo->cor }}">
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                    <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="validate-select" required>
                        @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ ($categoria->id == $veiculo->categoria->id) ? "selected" : "" }}> {{ $categoria->nome }} </option>
                        @endforeach
                    </select>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('script')

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    window.onload = function() {

        var PopularSlimSelectsObj = new PopularSlimSelects();

        $("#marcaSelect").on('change', function() {
            if (marcaSelect.selected() != '' && marcaSelect.selected() !== undefined) {
                $('#modeloSelect').empty();
                modeloSelect.enable();

                var dataAjaxModelo = {
                    "_token": "{{ csrf_token() }}",
                    "idMarca": marcaSelect.selected()
                };
                PopularSlimSelectsObj.popularSlimSelectAjaxBasico("{{ route('modelos.bymarca.get') }}", '#modeloSelect', 'id', 'nome', dataAjaxModelo);
            } else {
                $('#modeloSelect').empty();
                modeloSelect.disable();
            }
        });
    };
</script>

@endsection