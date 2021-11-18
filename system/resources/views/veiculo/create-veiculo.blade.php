@extends('layouts.admin-layout')

@section('title', 'Novo veículo')

@section('contentTitle', 'Novo veículo')

@section('frota-menu-active', 'active')
@section('novo-veiculo-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message="session('success')" />
        @elseif(session('error'))
        <x-alert type="danger" :message="session('error')" />
        @endif

        <livewire:veiculos.form-create-edit-veiculo />

    </div>
</div>

@endsection

@section('script')

<script src="/js/mascaras-inputs.js"></script>

@endsection