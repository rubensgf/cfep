
import DownloadPDF from './components/downloadPDF/index';
import PublicSearch from './components/publicSearch/index';
import FilterTable from './utils/filterTable';
import Mask from './utils/mask';

$('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
});

export const downloadPDF = new DownloadPDF('[data-download-pdf]');

export const publicSearch = new PublicSearch('[data-search-public]');

export const filterTable = new FilterTable('[data-filter-table]');

export const mask = new Mask('input[data-mask]');




// alert('amls csa c   click')

// import $ from "jquery";

// const body = $(body)

// console.log(body)
