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
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar ano',
        searchText: 'Não encontrado'
    });
}

if (document.getElementById('veiculoSelect')) {
    var veiculoSelect = new SlimSelect({
        select: '#veiculoSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar veículo',
        searchText: 'Não encontrado'
    });
}

if (document.getElementById('sexoSelect')) {
    var sexoSelect = new SlimSelect({
        select: '#sexoSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado'
    });
}

if (document.getElementById('tipoTelefoneSelect')) {
    var tipoTelefoneSelect = new SlimSelect({
        select: '#tipoTelefoneSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar',
        searchText: 'Não encontrado'
    });
}

if (document.getElementById('cidadeSelect')) {
    var cidadeSelect = new SlimSelect({
        select: '#cidadeSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar cidade',
        searchText: 'Não encontrado'
    });
}

if (document.getElementById('estadoSelect')) {
    var estadoSelect = new SlimSelect({
        select: '#estadoSelect',
        placeholder: selectPlaceholder,
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar estado',
        searchText: 'Não encontrado'
    });
}