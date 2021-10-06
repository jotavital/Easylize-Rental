@extends('layouts.adminLayout')

@section('title', 'Todos os veículos')

@section('contentTitle', 'Todos os veículos')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        <table id="tableVeiculos">
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
                    data: veiculos,
                    columns: [
                        {
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
                            data: 'fk_marca'
                        },
                        {
                            data: 'fk_modelo'
                        },
                        {
                            data: 'fk_categoria'
                        },
                        {
                            data: 'ativo'
                        }
                    ]
                });

            }
        });



    }
</script>

@endsection