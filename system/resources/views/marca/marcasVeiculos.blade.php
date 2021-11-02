<?php

use App\Models\MarcaVeiculo;
use Illuminate\Support\Facades\Session;

$marcas = MarcaVeiculo::all();

$success = Session::get('success');
$error = Session::get('error');
?>

@extends('layouts.adminLayout')

@section('title', 'Marcas')

@section('contentTitle', 'Marcas de veículos')

@section('frota-menu-active', 'active')
@section('marcas-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message='$success' />
        @elseif(session('error'))
        <x-alert type="danger" :message='$error' />
        @endif

        <section class="col-12 mb-3">
            <form action=" {{ route('marcas.store') }} " method="POST" class="col-12 needs-validation" novalidate>
                @csrf
                <div class="form-row col-12 d-flex justify-content-center">
                    <div class="form-group col-sm-3">
                        <label for="nomeMarcaInput">Nome da marca <span class="text-danger">*</span></label>
                        <input type="text" class="form-control form-control-sm" name="nomeMarcaInput" id="nomeMarcaInput" placeholder="Marca" required>
                        <x-campo-obrigatorio />
                    </div>
                </div>
                <div class="col-sm-12 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
                </div>
            </form>
        </section>

        <div class="mb-5">
            <table class="table table-striped table-bordered" width="100%" id="tableMarcas">
                <thead>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($marcas as $marca)
                    <tr>
                        <td> {{ $marca->id }} </td>
                        <td> {{ $marca->nome }} </td>
                        <td>
                            <x-acoes-tabela id="{{ $marca->id }}" :rotaEditar="route('marcas.edit', $marca->id)" />
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
<script>
    var tableMarcasObj;

    window.onload = function() {

        tableMarcasObj = $('#tableMarcas').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });

    }
</script>
@endsection