$('#placaInput').mask("AAA-0000");
$('#placaInput').keyup(function () {
    $(this).val($(this).val().toUpperCase());
});

$('#cpfInput').mask("000.000.000-00", {reverse: true});

$('#cepInput').mask("00000-000");

$('#numeroInput').mask("000000");

$('#valorInput').mask('0.000.000,00', {reverse: true});

$('#telefoneInput').mask("(00) 00000-0000");
$($('#tipoTelefoneSelect')).on('change', function () {
    if ($('#tipoTelefoneSelect').val() == "Celular") {
        $('#telefoneInput').mask("(00) 00000-0000");
    } else if ($('#tipoTelefoneSelect').val() == "Fixo") {
        $('#telefoneInput').mask("(00) 0000-0000");
    }
})
