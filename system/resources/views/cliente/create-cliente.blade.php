@extends('layouts.admin-layout')

@section('title', 'Novo cliente')

@section('contentTitle', 'Novo cliente')

@section('clientes-menu-active', 'active')
@section('novo-cliente-menu-active', 'active')
@section('clientes-menu-open', 'menu-open')

@section('content')

<livewire:clientes.wire-create-cliente />

@endsection

@section('script')

@endsection