Livewire.on('maximoFotosExcedido', function (fotosInputId, tipoDeFoto) {
    $(fotosInputId).val('');
    alert("O máximo de fotos por " + tipoDeFoto + " para seu plano foi excedido.");
});

Livewire.on('erroExcluirImagem', function () {
    alert("Erro ao excluir esta imagem, tente novamente.");
});

Livewire.on('erroAtivarRecurso', function () {
    alert("Erro ao ativar este recurso, tente novamente.");
});
Livewire.on('erroDesativarRecurso', function () {
    alert("Erro ao desativar este recurso, tente novamente.");
});