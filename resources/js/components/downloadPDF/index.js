import { jsPDF } from "jspdf";


export default class DownloadPDF {
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
            this.downloadCertificado();
        }
    }

    formatarData(str) {
        const partes = str.split('/').map(Number);
        const data = new Date('20' + partes[2], partes[1] - 1, partes[0]);
        return data.toLocaleString([], { year: 'numeric', month: 'long', day: 'numeric' });
    }
      
    downloadCertificado() {
        this.btnCertificadoDownload = this.element.querySelector('[data-certificado-pdf]');

        const dataUser = this.element.dataset;
        const cpf = dataUser.cpf;
        const expedido = this.formatarData(`${dataUser.expedido}`);
        
        let inscricao = dataUser.inscricao;
        inscricao = inscricao.substring(0, 2) + 
        ' ' + inscricao.substring(2, 5) + 
        ' ' + inscricao.substring(5);
        
        let nome = dataUser.name;
        nome = nome.toUpperCase();
        
        this.btnCertificadoDownload.addEventListener('click', () => {
            const certificado = new jsPDF('landscape');

            // Background do certificado
            certificado.addImage('/images/certificado.jpg', 'JPEG', 0, 0, 297, 210);

            // Nome do Membro
            certificado.setFontSize(26);
            certificado.text(
                nome,
                certificado.internal.pageSize.getWidth() / 2, 103, null, null, 'center');

            certificado.setFontSize(16);
            certificado.text(
                `portador do CPF Nº ${cpf}, obteve inscrição de Nº ${inscricao} no quadro`,
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
