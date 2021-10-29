$('#placaInput').mask("AAA-0000");
$('#placaInput').keyup(function () {
    $(this).val($(this).val().toUpperCase());
});