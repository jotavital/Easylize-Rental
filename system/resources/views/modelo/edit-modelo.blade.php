@extends('layouts.admin-layout')

@section('title', 'Editar Modelo')

@section('contentTitle', 'Editar modelo de veículo')

@section('frota-menu-active', 'active')
@section('modelos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        <section class="mb-3">
            <livewire:modelo-veiculo.form-create-edit-modelo :modelo="$modelo" />
        </section>
    </div>
</div>

@endsection

@section('script')


@endsection