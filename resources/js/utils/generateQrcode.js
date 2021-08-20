
export default class GenerateQrcode {
    constructor(elem) {
        this.element = document.querySelector(elem);
        this.qrcodeCarteirinha = document.querySelector('[data-qrcode-carteirinha]');
        this.qrcodePerfil = document.querySelector('[data-qrcode-perfil]');

        console.log('this.qrcodeCarteirinha', this.qrcodeCarteirinha)
        console.log('this.qrcodePerfil', this.qrcodePerfil)
        
        if (this.element) {
            this.generate(this.qrcodePerfil, this.qrcodeCarteirinha);
        }
    }

    generate(perfil, carteirinha) {
        const idQrcode = this.element.dataset.qrcodeId;

        if (perfil) {
            new QRCode(perfil, {
                text: `http://127.0.0.1:8000/consulta-qrcode/${idQrcode}`,
                width: 150,
                height: 150,
                correctLevel : QRCode.CorrectLevel.H
            })
        } else if (carteirinha) {
            new QRCode(carteirinha, {
                text: `http://127.0.0.1:8000/consulta-qrcode/${idQrcode}`,
                width: 74,
                height: 70,
                correctLevel : QRCode.CorrectLevel.H
            })
        }
    }
}
