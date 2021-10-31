function ativarInativarRegistro(rotaAtivarInativar, data) {
    $.ajax({
        url: rotaAtivarInativar,
        type: "post",
        data: JSON.parse(data),
        success: function (response) {

        },
        error: function (response) {
            alert("Não foi possível desativar este registro, tente novamente.");
        }
    });
}