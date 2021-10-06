<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');
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

        <form action=" {{ route('veiculos.store', ['tenant' => $_COOKIE['tenant_name']]) }} " method="POST" class="col-12 needs-validation" enctype='multipart/form-data' novalidate>
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
                <div class="form-group col-sm-4">
                    <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                    <select id="categoriaVeiculoSelect" name="categoriaVeiculoSelect" class="validate-select" required>
                        <option data-placeholder="true"></option>
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

<script>
    var selectPlaceholder = "Selecione";

    var marcaSelect = new SlimSelect({
        select: '#marcaSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    var modeloSelect = new SlimSelect({
        select: '#modeloSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    var categoriaVeiculoSelect = new SlimSelect({
        select: '#categoriaVeiculoSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    window.onload = function() {

        $('#placaInput').mask("AAA-0000");
        $('#placaInput').keyup(function() {
            $(this).val($(this).val().toUpperCase());
        });

        $.ajax({
            url: "{{ route('marcas.all.get', ['tenant' => $_COOKIE['tenant_name']]) }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(marcas) {

                marcas.forEach(element => {
                    $('#marcaSelect').append('<option value="' + element.id + '">' + element.nome + '</option>');
                });

            }
        });

        $("#marcaSelect").on('change', function() {

            if (marcaSelect.selected() != '') {
                $('#modeloSelect').empty();
                modeloSelect.enable();

                $.ajax({
                    url: "{{ route('modelos.bymarca.get', ['tenant' => $_COOKIE['tenant_name']]) }}",
                    type: "post",
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "idMarca": marcaSelect.selected()
                    },
                    dataType: "json",
                    success: function(modelos) {

                        if (modelos.length != 0) {

                            for (var i in modelos) {
                                $('#modeloSelect').append('<option value="' + modelos[i].id + '">' + modelos[i].nome + '</option>');
                            }

                        }

                    }
                });
            } else {
                $('#modeloSelect').empty();
                modeloSelect.disable();
            }
        });

        $.ajax({
            url: "{{ route('categorias.veiculos.get', ['tenant' => $_COOKIE['tenant_name']]) }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(categorias) {

                categorias.forEach(element => {
                    $('#categoriaVeiculoSelect').append('<option value="' + element.id + '">' + element.nome_categoria + '</option>');
                });

            }
        });

    }
</script>

@endsection