@extends('layouts.adminLayout')

@section('title', 'Modelos')

@section('contentTitle', 'Modelos de veículos')

@section('frota-menu-active', 'active')
@section('modelos-veiculos-menu-active', 'active')
@section('frota-menu-open', 'menu-open')

@section('content')

<div class="content">
    <div class="container-fluid">

        <div class="alerts col-12 d-flex justify-content-center">
            @if(session('error'))
            <div class="alert alert-danger d-flex align-items-center col-5" role="alert">
                <div>
                    <small>
                        <p class="p-0 m-0" style="text-align:center;">
                            {{ session('error') }}
                        </p>
                    </small>
                </div>
            </div>
            @elseif(session('success'))
            <div class="alert alert-success d-flex align-items-center col-5" role="alert">
                <div>
                    <small>
                        <p class="p-0 m-0" style="text-align:center;">
                            {{ session('success') }}
                        </p>
                    </small>
                </div>
            </div>
            @endif
        </div>

        <form action=" {{ route('modelos.store', ['tenant' => $_COOKIE['tenant_name']]) }} " method="POST" class="col-12 needs-validation" novalidate>
            @csrf
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <label for="nomeModeloInput">Nome do modelo <span class="text-danger">*</span></label>
                    <input type="text" class="form-control form-control-sm" name="nomeModeloInput" id="nomeModeloInput" placeholder="Modelo" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="anoModeloSelect">Ano do modelo <span class="text-danger">*</span></label>
                    <select id="anoModeloSelect" name="anoModeloSelect" required>
                        <option data-placeholder="true"></option>

                        <?php
                        foreach (range(date('Y') + 3, 1900) as $year) {
                        ?>

                            <option value="<?= $year ?>"><?= $year ?></option>

                        <?php
                        }
                        ?>

                    </select>
      
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="form-group col-md-4">
                    <label for="motorModeloInput">Motor <span class="text-danger">*</span></label>
                    <input type="number" class="form-control form-control-sm" name="motorModeloInput" id="motorModeloInput" placeholder="2.0" maxlength="3" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="marcaSelect">Marca <span class="text-danger">*</span></label>
                    <select id="marcaSelect" name="marcaSelect" required>
                        <option data-placeholder="true"></option>
                    </select>
                </div>
            </div>
            <div class="form-row col-12 d-flex justify-content-center">
                <div class="mt-4 input-group col-md-4">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="fotosInput" name="fotosInput" accept="image/*" multiple="multiple">
                        <label class="custom-file-label" for="fotosInput" aria-describedby="fotosInput">Fotos</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center">
                <button type="submit" class="btn btn-success mt-3 col-sm-2">Cadastrar</button>
            </div>
        </form>

    </div>
</div>

@endsection

@section('script')

<script>
    var marcaSelect = new SlimSelect({
        select: '#marcaSelect',
        placeholder: "Selecione",
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });

    var anoModeloSelect = new SlimSelect({
        select: '#anoModeloSelect',
        placeholder: "Selecione",
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar ano',
        searchText: 'Não encontrado',
    });

    window.onload = function() {

        $.ajax({
            url: "{{ route('marcas.all.get', ['tenant' => $_COOKIE['tenant_name']]) }}",
            type: "post",
            data: {
                "_token": "{{ csrf_token() }}"
            },
            dataType: "json",
            success: function(marcas) {

                marcas.forEach(element => {
                    $('#marcaSelect').append('<option value="' + element.id + '">' + element.nome + '</option>');
                });

            }
        });
    }
</script>

@endsection