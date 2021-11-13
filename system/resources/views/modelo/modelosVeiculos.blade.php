@extends('layouts.adminLayout')

@section('title', 'Modelos')

@section('contentTitle', 'Modelos de veículos')

@section('frota-menu-active', 'active')
@section('modelos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<livewire:modelos.modelos />

@endsection

@section('script')

<script src="/js/initialize-slimSelects.js"></script>
<script>
    var tableModelosObj;

    window.onload = function() {
        tableModelosObj = $('#tableModelos').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });
    }
</script>

@endsection