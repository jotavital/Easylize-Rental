<?php

use Illuminate\Support\Facades\Session;

$success = Session::get('success');
$error = Session::get('error');
?>

@extends('layouts.admin-layout')

@section('title', 'Novo aluguel')

@section('contentTitle', 'Novo aluguel')

@section('alugueis-menu-active', 'active')
@section('novo-aluguel-menu-active', 'active')
@section('alugueis-menu-open', 'menu-open')

@section('content')

<div class="content">

    <div class="container-fluid">

        @if(session('success'))
        <x-alert type="success" :message='$success' />
        @elseif(session('error'))
        <x-alert type="danger" :message='$error' />
        @endif

        <livewire:alugueis.form-create-edit-aluguel />
    </div>
</div>

@endsection

@section('script')

<script src="/js/mascaras-inputs.js"></script>
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>
<script>
    window.onload = function() {
        PopularSlimSelectsObj = new PopularSlimSelects();
    }
</script>

@endsection