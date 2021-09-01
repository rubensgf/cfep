
import DownloadPDF from './components/downloadPDF/index';
import PublicSearch from './components/publicSearch/index';
import FilterTable from './utils/filterTable';
import Mask from './utils/mask';
import CepValidate from './utils/cepValidate';
import GenerateQrcode from './utils/generateQrcode';
import FieldsValidation from './components/fieldsValidation/index';


$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

export const downloadPDF = new DownloadPDF('[data-download-pdf]');

export const publicSearch = new PublicSearch('[data-search-public]');

export const filterTable = new FilterTable('[data-filter-table]');

export const mask = new Mask('input[data-mask]');

export const cepValidate = new CepValidate('#cep');

export const generateQrcode = new GenerateQrcode('[data-qrcode]');

export const fieldsValidation = new FieldsValidation('#cpf', '#cnpj', '#password');


$('#btn-pay').on('click', function(e) {
    e.preventDefault();
    var url = $(this).attr('href');
    $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="'+url+'"></iframe>');
});

$(document).ready(function() {
    setTimeout(() => {
        $('#preloader .inner').fadeOut();
        $('#preloader').delay(350).fadeOut('slow'); 
        $('body').delay(350).css({'overflow': 'visible'});
    }, 8000);
});

$(window).on('load', function () {
    $('#preloader .inner').fadeOut();
    $('#preloader').delay(350).fadeOut('slow'); 
    $('body').delay(350).css({'overflow': 'visible'});
})


// function TestaCPF() {
//     var strCPF = "12345678909";
//     var Soma;
//     var Resto;
//     Soma = 0;
//     if (strCPF == "00000000000") {
//         console.log('invalido')
//         return false;
//     }

//     for (i = 1; i <= 9; i++)
//         Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (11 - i);
//     Resto = (Soma * 10) % 11;

//     if ((Resto == 10) || (Resto == 11)) {
//         Resto = 0;
//     }
//     if (Resto != parseInt(strCPF.substring(9, 10))) {
//         console.log('invalido')
//         return false;
//     }

//     Soma = 0;
//     for (i = 1; i <= 10; i++) Soma = Soma + parseInt(strCPF.substring(i - 1, i)) * (12 - i);
//     Resto = (Soma * 10) % 11;

//     if ((Resto == 10) || (Resto == 11)) Resto = 0;
//     if (Resto != parseInt(strCPF.substring(10, 11))) {
//         console.log('invalido')

//         return false;
//     }
//     console.log('Valido')

//     return true;

//     // alert((strCPF));

// }
// TestaCPF()
