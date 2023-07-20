/* Aqui começa o CEP */
/* JQuery */
$(document).on('blur', '#cep', function () {
    const cep = $(this).val();
    /* Ajax */
    $.ajax({
        url: 'https://viacep.com.br/ws/' + cep + '/json',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            if (data.erro) {
                alert('Endereço não encontrado');
            }

            $('#estado1').val(data.uf);
            $('#cidade1').val(data.localidade);
            $('#rua1').val(data.logradouro);
            $('#bairro1').val(data.bairro);
        }
    })
});
/* Aqui termina o CEP */
