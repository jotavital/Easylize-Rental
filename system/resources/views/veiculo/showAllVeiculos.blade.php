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
                    <th>ID</th>
                    <th>Placa</th>
                    <th>Chassi</th>
                    <th>Renavam</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Categoria</th>
                    <th>Ativo</th>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

@section('script')

<script>
    window.onload = function() {

        $.ajax({
            url: "{{ route('veiculos.all.get', ['tenant' => $_COOKIE['tenant_name']]) }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(veiculos) {
                $('#tableVeiculos').DataTable({
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
                                    // !! criar um componente para o switch que vai aparecer aqui
                                    return `<x-alert type="success" message=oi" />`;
                                } else {
                                    return "noooo";
                                }
                            }
                        }
                    ]
                });

            }
        });



    }
</script>

@endsection