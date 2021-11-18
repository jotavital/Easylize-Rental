@extends('layouts.admin-layout')

@section('title', 'Aluguéis')

@section('contentTitle', 'Aluguéis')

@section('alugueis-menu-active', 'active')
@section('todos-alugueis-menu-active', 'active')
@section('alugueis-menu-open', 'menu-open')

@section('content')

<livewire:alugueis.wire-alugueis />

@endsection

@section('script')
<script>
    var tableAlugueisObj;

    window.onload = function() {

        tableAlugueisObj = $('#tableAlugueis').DataTable({
            language: {
                url: '/lang/pt-br/dataTables_pt-br.json'
            },
            responsive: true,
            columns: [
                {
                    responsivePriority: 2
                },
                {
                    responsivePriority: 5
                },
                {
                    responsivePriority: 8
                },
                {
                    responsivePriority: 3
                },
                {
                    responsivePriority: 4
                },
                {
                    responsivePriority: 6
                },
                {
                    responsivePriority: 9
                },
                {
                    responsivePriority: 10
                },
                {
                    responsivePriority: 7
                },
                {
                    responsivePriority: 1
                },
            ]
        });
    }
</script>
@endsection