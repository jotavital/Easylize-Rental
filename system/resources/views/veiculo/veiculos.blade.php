@extends('layouts.admin-layout')

@section('title', 'Todos os veículos')

@section('contentTitle', 'Todos os veículos')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<livewire:veiculos.wire-veiculos />

@endsection

@section('script')

<script>
    var tableVeiculosObj;

    window.onload = function() {

        tableVeiculosObj = $('#tableVeiculos').DataTable({
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
                    responsivePriority: 5
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 1
                },
            ]
        });

    }
</script>

@endsection