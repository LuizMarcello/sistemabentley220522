/* const { then } = require("laravel-mix"); */

$(document).ready(function () {
    //.celular
    $('.celular').mask('(99) 99999-9999');
    //.phone
    $('.phone').mask('(99) 9999-9999');
    //.cep
    $('.cep1').mask('99999-999');
    $('.cep').mask('99999-999');
    //.documento
    $('.documento').mask('999.999.999-99');
    //.cpf_cnpj
    $('.cpf').mask('999.999.999-99');
    //.datanota */
    $('.cnpj').mask('99.999.999/9999-99');
    $('.datanota').mask('99/99/9999');
    //.macaddress
    $('.macaddress').mask('AA:AA:AA:AA:AA:AA');
    //.diametro
    $('.diametro').mask('999 cm');
    //.voltagem
    $('.voltagem').mask('999volts');
    //.valordecusto
    $('.valordecusto').mask('R$ 9.999,99');
    //.valormensal
    $('.valormensal').mask('R$ 9.999,99');
    //.velocmaxdown
    $('.velocmaxdown').mask('99 Mbps');
    //.velocmaxup
    /* $('.velocmaxup').mask('999 Abps'); */
    //.velocmindown
    $('.velocmindown').mask('999,9 Kbps');
    //.velocminup
    $('.velocminup').mask('999 Kbps');
    //.cir
    $('.cir').mask('99:9');
    //.banda
    $('.banda').mask('AA-Band');
    //.ie_rg
    $('.ie_rgg').mask('9.999.999-9');
    //.dataNascimento */
    $('.dataNascimento').mask('99/99/9999');
});

/**
 * função devido a classe ser "cpf" ou "cnpj", assim
 * aplicando a máscara automaticamente.
 */
var field = '.documento';

$(field).keydown(function () {
    try {
        $(field).unmask();
    } catch (e) { }

    var tamanho = $(field).val().length;

    if (tamanho < 11) {
        $(field).mask("999.999.999-99");
    } else {
        $(field).mask("99.999.999/9999-99");
    }

    // ajustando foco
    var elem = this;
    setTimeout(function () {
        // mudo a posição do seletor
        elem.selectionStart = elem.selectionEnd = 10000;
    }, 0);
    // reaplico o valor para mudar o foco
    var currentValue = $(this).val();
    $(this).val('');
    $(this).val(currentValue);
});







