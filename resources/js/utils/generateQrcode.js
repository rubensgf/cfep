
export default class GenerateQrcode {
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
        }
        this.generate();
    }

    generate() {
        const idQrcode = this.element.dataset.qrcodeId;

        console.log('idQrcode', idQrcode)
        
        new QRCode(this.element, {
            text: '//www.google.com.br',
            width: 150,
            height: 150,
            correctLevel : QRCode.CorrectLevel.H
        })
    }
}
