@extends('layouts.admin-layout')

@section('title', 'Editar cliente')

@section('contentTitle', 'Editar cliente')

@section('clientes-menu-active', 'active')
@section('todos-clientes-menu-active', 'active')
@section('clientes-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="col-12 d-flex justify-content-center">
            @if(session('success'))
            <x-alert type="success" :message="session('success')" class="col-5" />
            @elseif(session('error'))
            <x-alert type="danger" :message="session('success')" class="col-5" />
            @endif
        </div>

        <livewire:clientes.form-create-edit-cliente :cliente="$cliente" />

    </div>
</div>

@endsection

@section('script')

<script src="/js/mascaras-inputs.js"></script>

@endsection