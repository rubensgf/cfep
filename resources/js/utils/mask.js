
export default class Mask {
    
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
            this.setMask();
        }
    }
    
    setMask() {
        // $(document).ready(function($){
        //     $('input[data-mask="date"]').mask('00/00/0000');
        //     $('input[data-mask="cep"]').mask('00000-000');
        //     $('input[data-mask="phone_cel"]').mask('(00) 00000-0000');
        //     $('input[data-mask="phone"]').mask('(00) 0000-0000');
        //     $('input[data-mask="email"]').mask("A", {
        //         translation: {
        //             "A": {
        //                 pattern: /[\w@\-.+]/,
        //                 recursive: true
        //             }
        //         }
        //     });
        //     $('.mixed').mask('AAA 000-S0S');
        //     $('input[data-mask="cpf"]').mask('000.000.000-00', {
        //         reverse: true
        //     });
        //     $('input[data-mask="cnpj"]').mask('00.000.000/0000-00', {
        //         reverse: true
        //     });
        //     $('.money').mask('000.000.000.000.000,00', {
        //         reverse: true
        //     });
        // });
    }
}
