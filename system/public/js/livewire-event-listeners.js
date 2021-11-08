Livewire.on('maximoFotosExcedido', function (fotosInputId, tipoDeFoto) {
    $(fotosInputId).val('');
    alert("O máximo de fotos por " + tipoDeFoto + " para seu plano foi excedido.");
});