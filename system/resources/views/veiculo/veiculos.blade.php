@extends('layouts.adminLayout')

@section('title', 'Todos os veículos')

@section('contentTitle', 'Todos os veículos')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<?php

use App\Models\Veiculo;
use Illuminate\Support\Facades\Session;

$veiculos = Veiculo::all();

$success = Session::get('success');
$error = Session::get('error');

?>

<div class="content">

    @if(session('success'))
    <x-alert type="success" :message="$success" />
    @elseif(session('error'))
    <x-alert type="danger" :message='$error' />
    @endif

    <div class="container-fluid">
        <div class="col-12">
            <table class="table table-striped table-bordered" width="100%" id="tableVeiculos">
                <thead>
                    <th>ID </th>
                    <th>Placa</th>
                    <th>Chassi</th>
                    <th>Renavam</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                    <th>Categoria</th>
                    <th>Ativo</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($veiculos as $veiculo)
                    <tr>
                        <td> {{ $veiculo->id }} </td>
                        <td> {{ $veiculo->placa }} </td>
                        <td> {{ $veiculo->chassi }} </td>
                        <td> {{ $veiculo->renavam }} </td>
                        <td> {{ $veiculo->marca->nome }} </td>
                        <td> {{ $veiculo->modelo->nome }} </td>
                        <td> {{ $veiculo->cor }} </td>
                        <td> {{ $veiculo->categoria->nome }} </td>
                        <td>
                            <livewire:switch-ativar-inativar :model="$veiculo" />
                        </td>
                        <td>
                            <x-acoes-tabela id="{{ $veiculo->id }}" :rotaEditar="route('veiculos.edit', $veiculo->id)" />
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
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/ativar-inativar-registro.js"></script>
<script>
    var tableVeiculosObj;

    window.onload = function() {

        tableVeiculosObj = $('#tableVeiculos').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });

    }
</script>

@endsection