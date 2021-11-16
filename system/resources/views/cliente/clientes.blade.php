@extends('layouts.admin-layout')

@section('title', 'Clientes')

@section('contentTitle', 'Clientes')

@section('clientes-menu-active', 'active')
@section('todos-clientes-menu-active', 'active')
@section('clientes-menu-open', 'menu-open')

@section('content')

<livewire:clientes.wire-clientes />

@endsection

@section('script')
<script>
    var tableMarcasObj;

    window.onload = function() {

        tableClientesObj = $('#tableClientes').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true,
            columnDefs: [
            {
                "targets": [ 2 ],
                "visible": true
            },
            {
                "targets": [ 3 ],
                "visible": true
            }
        ]
        });

    }
</script>
@endsection