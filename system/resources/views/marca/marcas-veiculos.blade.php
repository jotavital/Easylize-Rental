@extends('layouts.admin-layout')

@section('title', 'Marcas')

@section('contentTitle', 'Marcas de veículos')

@section('frota-menu-active', 'active')
@section('marcas-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<livewire:marcas.wire-marcas-veiculos />

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