@extends('layouts.admin-layout')

@section('title', 'Editar Marca')

@section('contentTitle', 'Editar marca de veículo')

@section('frota-menu-active', 'active')
@section('marcas-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">

    <div class="container-fluid">
        <form action=" {{ route('marcas.update', $marca->id) }} " method="POST" class="col-12 needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-sm-3">
                    <label for="nomeMarcaInput">Nome da marca <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="nomeMarcaInput" id="nomeMarcaInput" placeholder="Marca" value="{{ $marca->nome }}" required>
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

@endsection