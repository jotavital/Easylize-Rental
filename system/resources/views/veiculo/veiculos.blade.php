@extends('layouts.adminLayout')

@section('title', 'Todos os veículos')

@section('contentTitle', 'Todos os veículos')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<?php

use App\Models\Veiculo;

$veiculos = Veiculo::all();

?>

<div class="content">

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
                        <td> {{ $veiculo->categoria->nome }} </td>
                        <td>
                            @if($veiculo->ativo)
                            <x-switch-ativar-inativar id="{{ $veiculo->id }}" :checked="'checked'" :submitFunctionName="'ativarInativarVeiculo'" />
                            @else
                            <x-switch-ativar-inativar id="{{ $veiculo->id }}" :checked="'false'" :submitFunctionName="'ativarInativarVeiculo'" />
                            @endif
                        </td>
                        <td>
                            <x-acoes-tabela id="{{ $veiculo->id }}" />
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div id="divModalEditarVeiculo">
    <x-modals.modal-editar-veiculo id="{{ request()->get('idVeiculoEditar') }}" />
</div>

<?php

if (isset($_GET['idVeiculoEditar'])) {
?>
    <x-scripts.show-editar-veiculo-modal />
<?php
}

?>

@endsection

@section('script')

<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script>
    var tableVeiculosObj;

    function ativarInativarVeiculo(id) {

        $.ajax({
            url: "{{ route('veiculos.ativar-inativar') }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}",
                "formId": id
            },
            success: function(response) {

            },
            error: function(response) {
                alert("Não foi possível desativar este veículo, tente novamente.");
            }
        });
    }

    window.onload = function() {

        $.ajax({
            url: "{{ route('veiculos.all.get') }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(veiculos) {
                tableVeiculosObj = $('#tableVeiculos').DataTable({
                    language: {
                        url: '/lang/pt-br/dataTables_pt-br.json'
                    },
                    responsive: true
                });
            }
        });

        $('#modalEditarVeiculo').on('hidden.bs.modal', function() {
            window.history.pushState(null, null, window.location.pathname);
        });

    }
</script>

@endsection