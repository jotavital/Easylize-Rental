@extends('layouts.adminLayout')

@section('title', 'Todos os veículos')

@section('contentTitle', 'Todos os veículos')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');

?>

<livewire:veiculos.veiculos />

@endsection

@section('script')

<script>
    var tableVeiculosObj;

    window.onload = function() {

        tableVeiculosObj = $('#tableVeiculos').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true
        });

    }
</script>

@endsection