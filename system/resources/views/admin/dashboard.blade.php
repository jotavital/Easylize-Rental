@extends('layouts.admin-layout')

@section('title', 'Dashboard')

@section('content')

@section('contentTitle', 'Painel')

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
    
        <livewire:dashboard.wire-dashboard />

    </div>
</div>

@endsection