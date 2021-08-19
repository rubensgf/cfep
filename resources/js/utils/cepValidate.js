
export default class CepValidate {
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
            this.validate();
        }
    }

    validate() {
        $('#cep').focusout(function () {
            if ($('#cep').val().length == 0) {
                $('#cep-error').html('');
            } else {
                $.ajax({
                    url: '//viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
                    dataType: 'json',
                    success: function (resposta) {
                        if (resposta.erro) {
                            $('#cep-error').html('<span style="color:red">✘CEP inválido</span>');
                            $('#endereco').val('');
                            $('#complemento').val('');
                            // $('#bairro').val('');
                            $('#cidade').val('');
                            $('#uf').val('');
                        } else {
                            $('#endereco').val(resposta.logradouro);
                            $('#complemento').val(resposta.complemento);
                            // $('#bairro').val(resposta.bairro);
                            $('#cidade').val(resposta.localidade);
                            $('#uf').val(resposta.uf);
                            $('#numero').focus();
    
                            $('#cep-error').html('<span style="color:green">✔</span>');
                        }
                    },
                    error: function () {
                        $('#cep-error').html('<span style="color:red">✘CEP inválido</span>');
                    }
                });
            }
        });
    }
}
