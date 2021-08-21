
export default class PasswordValidate {
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
            this.verificaForcaSenha();
        }
    }

    verificaForcaSenha() {
        var numeros = /([0-9])/;
        var alfabetoa = /([a-z])/;
        var alfabetoA = /([A-Z])/;
        var chEspeciais = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

        this.element.addEventListener("keyup", (e) => {
            if ($('#password').val().length < 8) {
                $('#password-status').html("Força: <span style='color:red'>Fraco, mínimo 8 caracteres</span>");
            } else if ($('#password').val().match(numeros) && $('#password').val().match(alfabetoa) && $('#password').val().match(alfabetoA) && $('#password').val().match(chEspeciais)) {
                $('#password-status').html("Força: <span style='color:green'><b>Forte</b></span>");
            } else {
                $('#password-status').html("Força: <span style='color:orange'>Médio</span>");
            }

            if ($('#password').val().length == 0) {
                $('#password-status').html("");
            }
        });

        $('#confirm-password').blur(() => {
            if ($('#password').val() !== $('#confirm-password').val()) {
                $('#password-error').html("<span style='color:red'>✘ Senhas diferentes</span>");
            } else {
                $('#password-error').html('<span style="color:green">✔</span>');
            }
        });
    }
}
