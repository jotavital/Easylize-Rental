@extends('layouts.admin-layout')

@section('title', 'Editar veículo')

@section('contentTitle', 'Editar veículo')

@section('frota-menu-active', 'active')
@section('todos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message="session('success')" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" />
        @endif

        <livewire:veiculos.form-create-edit-veiculo :veiculo="$veiculo" />

    </div>
</div>

@endsection

@section('script')

<script src="/js/mascaras-inputs.js"></script>

@endsection