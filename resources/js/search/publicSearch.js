// Consulta de Membros

// Variáveis Globais
const $elem = document.querySelector('[data-search-public]');
const inputSearch = $elem.querySelector('[data-term-search]');
const btnSearch = $elem.querySelector('[data-btn-search]');
const boxResultSearch = $elem.querySelector('[data-box-result-search]');
const loaderGift = $elem.querySelector('[data-loader-gift]');
const boxResultSearchFail = $elem.querySelector('[data-box-result-search-fail]');

const msgError = $elem.querySelector('[data-msg-error]');


const dataFotoResult = $elem.querySelector('[data-search="foto"]');
const dataNameResult = $elem.querySelector('[data-search="nome"]');
const dataIdResult = $elem.querySelector('[data-search="id"]');
const dataExpedidoResult = $elem.querySelector('[data-search="expedido"]');
const dataValidadeResult = $elem.querySelector('[data-search="validade"]');
const dataSituacaoResult = $elem.querySelector('[data-search="situacao"]');

const triggerSearch = () => {
    btnSearch.addEventListener("click", () => {
        const term = inputSearch.value;
        const termLength = term.length;

        msgError.classList.add('is-hidden');

        if (termLength >= 8) {
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

        if (key == 13 && termLength >= 8) {
            searchTerm(term);
        } else if (key == 13) {
            msgError.classList.remove('is-hidden');
        }
    });
};


const searchTerm = (term) => {
    boxResultSearch.classList.add('is-hidden');
    boxResultSearchFail.classList.add('is-hidden');
    loaderGift.classList.remove('is-hidden');

    const request = $.get(`http://127.0.0.1:8000/consulta-inscritos/${term}`);
    
    request.done((data) => {
        console.log("success");

        dataFotoResult.setAttribute('src', `/images/fotos-membros/${data.foto}`);
        dataNameResult.innerHTML = data.nome;
        dataIdResult.innerHTML = data.id;
        dataExpedidoResult.innerHTML = data.expedido;
        dataValidadeResult.innerHTML = data.validade;
        dataSituacaoResult.innerHTML = data.situacao;

        boxResultSearch.classList.remove('is-hidden');
        boxResultSearchFail.classList.add('is-hidden');

    })
    request.fail(() => {
        console.log("error");
        boxResultSearchFail.classList.remove('is-hidden');

    })
    request.always(() => {
        console.log("finished");
        loaderGift.classList.add('is-hidden');
    });
}

// $init
triggerSearch();

//////////////

//   $.get("http://127.0.0.1:8000/consulta-inscritos/1d6000001", function(data, status){
//     console.log("Data: " + data + "\nStatus: " + status);
//   });

// Assign handlers immediately after making the request,
// and remember the jqxhr object for this request
// var jqxhr = $.get( "http://127.0.0.1:8000/consulta-inscritos/116000001", () => {
//     alert( "success" );
//   })
//     .done((data) => {
//       alert( "second success" );
//       console.log('data', data)
//     })
//     .fail(function() {
//       alert( "error" );
//     })
//     .always(function() {
//       alert( "finished" );
//     });

//   // Perform other work here ...

//   // Set another completion function for the request above
//   jqxhr.always(function() {
//     alert( "second finished" );
//   });


// $.ajax({
//     url: "http://127.0.0.1:8000/consulta-inscritos/16000001",
//     context: document.body
//   }).done(function() {
//     $( this ).addClass( "done" );

//     console.log('data', data)
// });

// console.log(term)



// "init"
// searchTerm();




















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

