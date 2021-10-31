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
$rotaAtivarInativarVeiculo = route('veiculos.ativar-inativar');

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
                            <x-switch-ativar-inativar id="{{ $veiculo->id }}" :checked="'checked'" :rotaAtivarInativar="$rotaAtivarInativarVeiculo" />
                            @else
                            <x-switch-ativar-inativar id="{{ $veiculo->id }}" :checked="'false'" :rotaAtivarInativar="$rotaAtivarInativarVeiculo" />
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

        $('#modalEditarVeiculo').on('hidden.bs.modal', function() {
            window.history.pushState(null, null, window.location.pathname);
        });

    }
</script>

@endsection