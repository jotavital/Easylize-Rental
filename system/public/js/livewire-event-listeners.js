Livewire.on('maximoFotosExcedido', function (fotosInputId, tipoDeFoto) {
    $(fotosInputId).val('');
    alert("O máximo de fotos por " + tipoDeFoto + " para seu plano foi excedido.");
});

Livewire.on('erroExcluirImagem', function () {
    alert("Erro ao excluir esta imagem, tente novamente.");
});