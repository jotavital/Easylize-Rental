var selectPlaceholder = "Selecione";

if (document.getElementById('marcaSelect')) {
    var marcaSelect = new SlimSelect({
        select: '#marcaSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });
}

if (document.getElementById('modeloSelect')) {
    var modeloSelect = new SlimSelect({
        select: '#modeloSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });
}

if (document.getElementById('categoriaVeiculoSelect')) {
    var categoriaVeiculoSelect = new SlimSelect({
        select: '#categoriaVeiculoSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado',
    });
}

if (document.getElementById('anoModeloSelect')) {
    var anoModeloSelect = new SlimSelect({
        select: '#anoModeloSelect',
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar ano',
        searchText: 'Não encontrado'
    });
}