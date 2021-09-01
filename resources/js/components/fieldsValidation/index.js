import { request } from "./request";

export default class FieldsValidation {
    constructor(cpf, cnpj, password) {
        this.cpf = document.querySelector(cpf);
        this.cnpj = document.querySelector(cnpj);
        this.password = document.querySelector(password);

        if (this.cpf || this.cnpj) {
            this.checkCpfCnpj();
        }
        
        if (this.password) {
            this.checkPassword();
        }
    }

    checkCpfCnpj() {
        if (this.cpf) {
            $(cpf).blur(() => {
                const doc = this.cpf.getAttribute('name');
                const term = this.cpf.value;

                request(term, doc);
            });
            
        } else if (this.cnpj) {
            $(cnpj).blur(() => {
                const doc = this.cnpj.getAttribute('name');
                const term = this.cnpj.value;
                
                request(term, doc);
            });
        }
    }

    checkPassword() {
        const numeros = /([0-9])/;
        const alfabetoa = /([a-z])/;
        const alfabetoA = /([A-Z])/;
        const chEspeciais = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
        const passwordStatus = document.getElementById('password-status');
        const passwordError = document.getElementById('password-error');
        const confirmPassword = document.getElementById('confirm-password');

        this.password.addEventListener("keyup", (e) => {
            if ($(this.password).val().length < 8) {
                $(passwordStatus).html(
                    "Força: <span style='color:red'>Fraco, mínimo 8 caracteres</span>");
            
            } else if ($(this.password).val().match(numeros) 
            && $(this.password).val().match(alfabetoa) 
            && $(this.password).val().match(alfabetoA) 
            && $(this.password).val().match(chEspeciais)) {
                $(passwordStatus).html(
                    "Força: <span style='color:green'><b>Forte</b></span>");
            } else {
                $(passwordStatus).html(
                    "Força: <span style='color:orange'>Médio</span>");
            }

            if ($(this.password).val().length == 0) {
                $(passwordStatus).html('');
            }
        });

        $(confirmPassword).blur(() => {
            if ($(this.password).val() !== $(confirmPassword).val()) {
                $(passwordError).html(
                    "<span style='color:red'>✘ Senhas diferentes</span>");
            } else {
                $(passwordError).html('<span style="color:green">✔</span>');
            }
        });
    }
}
