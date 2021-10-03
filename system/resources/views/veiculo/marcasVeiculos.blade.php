@extends('layouts.adminLayout')

@section('title', 'Marcas')

@section('contentTitle', 'Marcas de veículos')

@section('frota-menu-active', 'active')
@section('marcas-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        <form action=" {{ route('marcas.store', ['tenant' => $_COOKIE['tenant_name']]) }} " method="POST" class="col-12">
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="placaInput">Nome da marca <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" id="placaInput" placeholder="Marca" required>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="button" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
            </div>
        </form>

    </div>
</div>

@endsection