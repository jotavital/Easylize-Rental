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
    var tableClientesObj;

    window.onload = function() {

        tableClientesObj = $('#tableClientes').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true,
            columns: [
                {
                    responsivePriority: 2
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 8
                },
                {
                    responsivePriority: 3
                },
                {
                    responsivePriority: 4
                },
                {
                    responsivePriority: 6
                },
                {
                    responsivePriority: 9
                },
                {
                    responsivePriority: 10
                },
                {
                    responsivePriority: 7
                },
                {
                    responsivePriority: 1
                },
            ]
        });
    }
</script>
@endsection