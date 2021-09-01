
export default class GenerateQrcode {
    constructor(elem) {
        this.element = document.querySelector(elem);
        this.qrcodeCarteirinha = document.querySelector('[data-qrcode-carteirinha]');
        this.qrcodePerfil = document.querySelector('[data-qrcode-perfil]');

        if (this.element) {
            this.generate(this.qrcodePerfil, this.qrcodeCarteirinha);
        }
    }

    generate(perfil, carteirinha) {
        const idQrcode = this.element.dataset.qrcodeId;

        if (perfil) {
            new QRCode(perfil, {
                text: `//cfepmembros.com.br/consulta-qrcode/${idQrcode}`,
                width: 150,
                height: 150,
                correctLevel : QRCode.CorrectLevel.H
            })
        } else if (carteirinha) {
            new QRCode(carteirinha, {
                text: `//cfepmembros.com.br/consulta-qrcode/${idQrcode}`,
                width: 74,
                height: 70,
                correctLevel : QRCode.CorrectLevel.L
            })
        }
    }
}
