<?php

use App\Models\MarcaVeiculo;
use App\Models\TipoCategoria;
use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');
$marcas = MarcaVeiculo::all();
$categorias = TipoCategoria::find(1)->categorias;
?>

@extends('layouts.adminLayout')

@section('title', 'Novo veículo')

@section('contentTitle', 'Novo veículo')

@section('frota-menu-active', 'active')
@section('novo-veiculo-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message='$success' />
        @elseif(session('error'))
        <x-alert type="danger" :message='$error' />
        @endif

        <form action=" {{ route('veiculos.store') }} " method="POST" class="col-12 needs-validation" enctype='multipart/form-data' novalidate>
            @csrf
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Placa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="placaInput" name="placaInput" placeholder="Placa do veículo" maxlength="8" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-5">
                    <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="chassiInput" name="chassiInput" placeholder="Número do chassi" maxlength="17" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="renavamInput" name="renavamInput" placeholder="Código Renavam" maxlength="11" required>
                    <x-campo-obrigatorio />
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect" name="marcaSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}"> {{ $marca->nome }} </option>    
                        @endforeach
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-4">
                    <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                    <select id="modeloSelect" name="modeloSelect" disabled class="validate-select" required>
                        <option data-placeholder="true"></option>
                    </select>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="corInput">Cor <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="corInput" name="corInput" placeholder="Cor" required>
                    <x-campo-obrigatorio />
                </div>
                <div class="form-group col-sm-2">
                    <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                    <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}"> {{ $categoria->nome }} </option>    
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

<script src="/js/mascaras-inputs.js"></script>
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>

    window.onload = function() {
        PopularSlimSelectsObj = new PopularSlimSelects();

        //! popular select marca
        var dataAjax = {
            "_token": "{{ csrf_token() }}"
        };

        // ! popular select modelo 
        $("#marcaSelect").on('change', function() {
            if (marcaSelect.selected() != '') {
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

    }

</script>

@endsection