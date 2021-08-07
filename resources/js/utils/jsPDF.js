import { jsPDF } from "jspdf";

// Default export is a4 paper, portrait, using millimeters for units

const btnCertificadoDownload = document.querySelector('[data-certificado-pdf]');

btnCertificadoDownload.addEventListener('click', () => {
    const certificado = new jsPDF('landscape');
    
    const willy = 26;
    // certificado.setFontSize(40);
    // certificado.text("Octonyan loves jsPDF", 35, 25);
    // const alignCenter = certificado.internal.pageSize.getWidth() / 2, 50, null, null, 'center'
    certificado.addImage("/images/certificado.jpg", "JPEG", 0, 0, 297, 210);
    certificado.setFontSize(32);
    certificado.text('Rubens Rubão da Silva Gimenez da Cunha', certificado.internal.pageSize.getWidth() / 2, 103, null, null, 'center');
    certificado.setFontSize(16);
    certificado.text("portador do CPF Nº 100.000.100-00, obteve inscrição de Nº 16.000.001 no quadro", certificado.internal.pageSize.getWidth() / 2, 114, null, null, 'center');
    certificado.setFontSize(16);
    certificado.text("de educadores e pedagogos do Conselho Federal de Educadores e Pedagogos.", certificado.internal.pageSize.getWidth() / 2, 121, null, null, 'center');
    certificado.setFontSize(16);
    certificado.text("Inscrito em 28 de maio de 1991.", certificado.internal.pageSize.getWidth() / 2 + willy, 145, null, null, 'left');
    
    certificado.save("CFEP_certificado_16000001.pdf");
})


// const data = document.querySelector('[data-certificado]');

// console.log('DATA:', data)