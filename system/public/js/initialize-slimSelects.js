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
    var anos = [
        {
            'placeholder': true,
            'text': selectPlaceholder,
            'value': ''
        }
    ];

    for (var i = new Date().getFullYear() + 3; i >= 1950; i--) {
        if (anoModelo != undefined && i == anoModelo) {
            var optionAno = {
                text: i,
                value: i,
                selected: true
            }
        } else {
            var optionAno = {
                text: i,
                value: i
            }
        }

        anos.push(optionAno);
    }

    var anoModeloSelect = new SlimSelect({
        select: '#anoModeloSelect',
        allowDeselect: true,
        searchPlaceholder: 'Pesquisar ano',
        searchText: 'Não encontrado',
        data: anos
    });
}