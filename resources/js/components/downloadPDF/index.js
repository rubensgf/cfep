import { jsPDF } from "jspdf";


export default class DownloadPDF {
    constructor(elem) {
        // alert('teste')
        this.element = document.querySelector(elem);

        if (this.element) {
            this.downloadCertificado();
        }
    }

    downloadCertificado() {
        this.btnCertificadoDownload = this.element.querySelector('[data-certificado-pdf]');

        this.btnCertificadoDownload.addEventListener('click', () => {
            const certificado = new jsPDF('landscape');
            
            const dataUser = this.element.dataset;
            const nome = dataUser.name;
            const cpf = dataUser.cpf;
            const inscricao = dataUser.inscricao;
            const expedido = dataUser.expedido;

            const data = '28/02/1991';
            // const dia = 

            certificado.addImage('/images/certificado.jpg', 'JPEG', 0, 0, 297, 210);

            certificado.setFontSize(32);
            certificado.text(
                nome,
                certificado.internal.pageSize.getWidth() / 2, 103, null, null, 'center');

            certificado.setFontSize(16);
            certificado.text(
                `portador do CPF Nº${cpf}, obteve inscrição de Nº${inscricao} no quadro`,
                certificado.internal.pageSize.getWidth() / 2, 114, null, null, 'center');

            certificado.setFontSize(16);
            certificado.text(
                'de educadores e pedagogos do Conselho Federal de Educadores e Pedagogos.',
                certificado.internal.pageSize.getWidth() / 2, 121, null, null, 'center');

            certificado.setFontSize(16);
            certificado.text(
                `Inscrito em ${expedido}.`,
                certificado.internal.pageSize.getWidth() / 2 + 26, 145, null, null, 'left');

            certificado.save(`CFEP_certificado_${inscricao}.pdf`);
        })
    }
}
