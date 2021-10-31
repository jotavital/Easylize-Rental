@extends('layouts.adminLayout')

@section('title', 'Todos os veículos')

@section('contentTitle', 'Todos os veículos')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

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
                    responsive: true,
                    data: veiculos,
                    columns: [{
                            data: 'id'
                        },
                        {
                            data: 'placa'
                        },
                        {
                            data: 'chassi'
                        },
                        {
                            data: 'renavam'
                        },
                        {
                            data: 'marca.nome'
                        },
                        {
                            data: 'modelo.nome'
                        },
                        {
                            data: 'categoria.nome'
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                if (data.ativo == 1) {
                                    return `<x-switch-ativar-inativar id="` + data.id + `" checked="checked" :submitFunctionName="'ativarInativarVeiculo'" />`;
                                } else {
                                    return `<x-switch-ativar-inativar id="` + data.id + `" checked="false" :submitFunctionName="'ativarInativarVeiculo'" />`;
                                }
                            }
                        },
                        {
                            data: null,
                            render: function(data, type, row) {
                                return `<x-acoes-tabela id="` + data.id + `" />`;
                            }
                        }
                    ]
                });
            }
        });

        $('#modalEditarVeiculo').on('hidden.bs.modal', function() {
            window.history.pushState(null, null, window.location.pathname);
        });
        
    }
</script>

@endsection