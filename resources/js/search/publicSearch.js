// import { TABS_ITEMS, COMBO_TAB_ITEM, LONG_SLUG_PROPERTIES_BY } from './constants';


// Consulta de Membros

// Variáveis Globais
const $elem = document.querySelector('[data-search-public]');

const btnSearch = $elem ? $elem.querySelector('[data-btn-search]') : null;
const boxResultSearch = $elem ? $elem.querySelector('[data-box-result-search]') : null;
const boxResultSearchFail = $elem ? $elem.querySelector('[data-box-result-search-fail]') : null;
const dataFotoResult = $elem ? $elem.querySelector('[data-search="foto"]') : null;
const dataExpedidoResult = $elem ? $elem.querySelector('[data-search="expedido"]') : null;
const dataIdResult = $elem ? $elem.querySelector('[data-search="id"]') : null;
const dataNameResult = $elem ? $elem.querySelector('[data-search="nome"]') : null;
const dataSituacaoResult = $elem ? $elem.querySelector('[data-search="situacao"]') : null;
const dataValidadeResult = $elem ? $elem.querySelector('[data-search="validade"]') : null;
const inputSearch = $elem ? $elem.querySelector('[data-term-search]') : null;
const loaderGift = $elem ? $elem.querySelector('[data-loader-gift]') : null;
const msgError = $elem ? $elem.querySelector('[data-msg-error]') : null;

const triggerSearch = () => {
    btnSearch.addEventListener("click", () => {
        const term = inputSearch.value;
        const termLength = term.length;

        msgError.classList.add('is-hidden');

        if (termLength >= 5) {
            searchTerm(term);
        } else {
            msgError.classList.remove('is-hidden');
        }
    });
    
    inputSearch.addEventListener("keyup", (e) => {
        const key = e.which || e.keyCode;
        const term = inputSearch.value;
        const termLength = term.length;

        msgError.classList.add('is-hidden');

        if (key == 13 && termLength >= 5) {
            searchTerm(term);
        } else if (key == 13) {
            msgError.classList.remove('is-hidden');
        }
    });
};

const request = (term) => {
    const request = $.get(`./${term}`);
    
    request.done((data) => {
        setValues(data);

        boxResultSearch.classList.remove('is-hidden');
        boxResultSearchFail.classList.add('is-hidden');
    })

    request.fail(() => {
        boxResultSearchFail.classList.remove('is-hidden');
    })

    request.always(() => {
        loaderGift.classList.add('is-hidden');
    });
}

const searchTerm = (term) => {
    boxResultSearch.classList.add('is-hidden');
    boxResultSearchFail.classList.add('is-hidden');
    loaderGift.classList.remove('is-hidden');

    request(term);
}

const setValues = (data) => {
    const isMembro = data.cpf;
    
    data = isMembro ? data : data[0];
    
    if (dataFotoResult) {
        dataFotoResult.setAttribute('src', `/images/fotos-membros/${data.foto}`);
    }

    dataNameResult.innerHTML = isMembro ? data.nome : data.nomeFantasma;
    dataIdResult.innerHTML = data.id;
    dataExpedidoResult.innerHTML = data.expedido;
    dataValidadeResult.innerHTML = data.validade;
    dataSituacaoResult.innerHTML = isMembro ? data.situacao : data.situacaoCadastro;
}

// $init
if ($elem) {
    triggerSearch();
}

//////////////


// Filtrar tabela

$(document).ready(function () {
    $('[data-filter-table]').on('keyup', function () {
        let value = $(this).val().toLowerCase();
        $('[data-filter-table] tr').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
///

