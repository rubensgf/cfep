
export default class GenerateQrcode {
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
            this.generate();
        }
    }

    generate() {
        const idQrcode = this.element.dataset.qrcodeId;
        const URL = process.env.SEARCH_QRCODE;
        
        console.log("URL", URL)
        console.log('idQrcode', idQrcode)
        
        new QRCode(this.element, {
            text: `http://127.0.0.1:8000/consulta-qrcode/${idQrcode}`,
            width: 150,
            height: 150,
            correctLevel : QRCode.CorrectLevel.H
        })
    }
}
