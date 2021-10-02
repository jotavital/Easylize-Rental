@extends('layouts.adminLayout')

@section('title', 'Novo veículo')

@section('contentTitle', 'Novo veículo')

@section('frota-menu-active', 'active')
@section('novo-veiculo-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        <form action="  " method="POST" class="col-12">
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Placa</label>
                    <input type="placaInput" class="form-control form-control-sm" id="placaInput" placeholder="Placa do veículo">
                </div>
                <div class="form-group col-sm-5">
                    <label for="chassiInput">Chassi</label>
                    <input type="chassiInput" class="form-control form-control-sm" id="chassiInput" placeholder="Número do chassi">
                </div>
                <div class="form-group col-sm-4">
                    <label for="renavamInput">Renavam</label>
                    <input type="renavamInput" class="form-control form-control-sm" id="renavamInput" placeholder="Código Renavam">
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="marcaSelect">Marca</label>
                    <select id="marcaSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="modeloSelect">Modelo</label>
                    <select id="modeloSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="categoriaVeiculoSelect">Categoria</label>
                    <select id="categoriaVeiculoSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Placa</label>
                    <input type="placaInput" class="form-control form-control-sm" id="placaInput" placeholder="Placa do veículo">
                </div>
            </div>
        </form>

    </div>
</div>

@endsection