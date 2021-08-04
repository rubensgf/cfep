    $('input[data-mask="date"]').mask('00/00/0000');
    $('input[data-mask="cep"]').mask('00000-000');
    $('input[data-mask="phone_cel"]').mask('(00) 00000-0000');
    $('input[data-mask="phone"]').mask('(00) 0000-0000');
    $('input[data-mask="email"]').mask("A", {
        translation: {
            "A": {
                pattern: /[\w@\-.+]/,
                recursive: true
            }
        }
    });
    $('.mixed').mask('AAA 000-S0S');
    $('input[data-mask="cpf"]').mask('000.000.000-00', {
        reverse: true
    });
    $('input[data-mask="cnpj"]').mask('00.000.000/0000-00', {
        reverse: true
    });
    $('.money').mask('000.000.000.000.000,00', {
        reverse: true
    });
    $('.money2').mask("#.##0,00", {
        reverse: true
    });
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', {
        reverse: true
    });
    $('.clear-if-not-match').mask("00/00/0000", {
        clearIfNotMatch: true
    });
    $('.placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
    });
    $('.fallback').mask("00r00r0000", {
        translation: {
            'r': {
                pattern: /[\/]/,
                fallback: '/'
            },
            placeholder: "__/__/____"
        }
    });
    $('.selectonfocus').mask("00/00/0000", {
        selectOnFocus: true
    });
