@extends('layouts.adminLayout')

@section('title', 'Novo veículo')

@section('contentTitle', 'Novo veículo')

@section('frota-menu-active', 'active')
@section('novo-veiculo-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        <form action="  " method="POST" class="col-12" enctype='multipart/form-data'>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Placa <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="placaInput" placeholder="Placa do veículo" maxlength="7" required>
                </div>
                <div class="form-group col-sm-5">
                    <label for="chassiInput">Chassi <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="chassiInput" placeholder="Número do chassi" maxlength="17" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="renavamInput">Renavam <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="renavamInput" placeholder="Código Renavam" maxlength="11" required>
                </div>
            </div>
            <div class="mb-2 form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="modeloSelect">Modelo <span class="text-danger">*</span></label>
                    <select id="modeloSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
                <div class="form-group col-sm-4">
                    <label for="categoriaVeiculoSelect">Categoria <span class="text-danger">*</span></label>
                    <select id="categoriaVeiculoSelect">
                        <option value="value 1">Value 1</option>
                    </select>
                </div>
            </div>
            <div class="form-row col-md-12 d-flex justify-content-center">
                <div class="input-group mb-3 col-md-6">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotoInput" accept="image/*">
                        <label class="custom-file-label" for="fotoInput" aria-describedby="fotoInput">Foto (miniatura)</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="fotoInput">Enviar</span>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="button" class="btn btn-success mt-3 col-sm-2">Pronto</button>
            </div>
        </form>

    </div>
</div>

@endsection