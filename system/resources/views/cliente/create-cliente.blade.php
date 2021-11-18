@extends('layouts.admin-layout')

@section('title', 'Novo cliente')

@section('contentTitle', 'Novo cliente')

@section('clientes-menu-active', 'active')
@section('novo-cliente-menu-active', 'active')
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

        <livewire:clientes.form-create-edit-cliente />
        
    </div>

    <script>
        window.onload = function() {
            PopularSlimSelectsObj = new PopularSlimSelects();

            // ! popular select modelo 
            $("#estadoSelect").on('change', function() {
                if (estadoSelect.selected() != '') {
                    $('#cidadeSelect').empty();
                    cidadeSelect.enable();

                    var dataAjaxCidades = {
                        "_token": "{{ csrf_token() }}"
                    };
                    var url = '{{ route("cidades.byestado.get", ":id") }}';
                    url = url.replace(':id', estadoSelect.selected());

                    PopularSlimSelectsObj.popularSlimSelectAjaxBasico(url, '#cidadeSelect', 'id', 'nome', dataAjaxCidades, 'get');
                } else {
                    $('#cidadeSelect').empty();
                    cidadeSelect.disable();
                }
            });
        }
    </script>
</div>

@endsection

@section('script')
<script src="/js/initialize-slimSelects.js"></script>
<script src="/js/mascaras-inputs.js"></script>
<script src="/js/classes/PopularSlimSelects.js"></script>

@endsection