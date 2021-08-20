import { ELEMENTS, IS_HIDDEN, D_FLEX } from './constants';

export default class PublicSearch {
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
            this.btnSearch = this.element.querySelector(ELEMENTS.btnSearch);
            this.boxResultSearch = this.element.querySelector(ELEMENTS.boxResultSearch);
            this.boxResultSearchFail = this.element.querySelector(ELEMENTS.boxResultSearchFail);
            this.dataFotoResult = this.element.querySelector(ELEMENTS.dataFotoResult);
            this.dataExpedidoResult = this.element.querySelector(ELEMENTS.dataExpedidoResult);
            this.dataIdResult = this.element.querySelector(ELEMENTS.dataIdResult);
            this.dataNameResult = this.element.querySelector(ELEMENTS.dataNameResult);
            this.dataSituacaoResult = this.element.querySelector(ELEMENTS.dataSituacaoResult);
            this.dataValidadeResult = this.element.querySelector(ELEMENTS.dataValidadeResult);
            this.inputSearch = this.element.querySelector(ELEMENTS.inputSearch);
            this.loaderGift = this.element.querySelector(ELEMENTS.loaderGift);
            this.msgError = this.element.querySelector(ELEMENTS.msgError);
            this.semFoto = this.element.querySelector(ELEMENTS.dataSemFoto);
            
            this.triggerSearch();
        }
    }

    triggerSearch() {
        this.btnSearch.addEventListener("click", () => {
            const term = this.inputSearch.value;
            const termLength = term.length;
    
            this.msgError.classList.add(IS_HIDDEN);
    
            if (termLength >= 5) {
                this.searchTerm(term);
            } else {
                this.msgError.classList.remove(IS_HIDDEN);
            }
        });
        
        this.inputSearch.addEventListener("keyup", (e) => {
            const key = e.which || e.keyCode;
            const term = this.inputSearch.value;
            const termLength = term.length;
    
            this.msgError.classList.add(IS_HIDDEN);
    
            if (key == 13 && termLength >= 5) {
                this.searchTerm(term);
            } else if (key == 13) {
                this.msgError.classList.remove(IS_HIDDEN);
            }
        });
    };

    searchTerm(term) {
        this.boxResultSearch.classList.add(IS_HIDDEN);
        this.boxResultSearchFail.classList.add(IS_HIDDEN);
        this.loaderGift.classList.remove(IS_HIDDEN);
    
        this.request(term);
    }

    request(term) {
        const request = $.get(`./${term}`);
        
        request.done((data) => {
            console.log('data.length', data)
            if (data.id || data[0]) {
                this.setValues(data);
                console.log('IF')
                
                this.boxResultSearch.classList.remove(IS_HIDDEN);
                this.boxResultSearchFail.classList.add(IS_HIDDEN);
            } else {
                console.log('ELSE')

                this.loaderGift.classList.add(IS_HIDDEN);
                this.boxResultSearchFail.classList.remove(IS_HIDDEN);
            }
        })
    
        request.fail(() => {
            this.boxResultSearchFail.classList.remove(IS_HIDDEN);
        })
    
        request.always(() => {
            this.loaderGift.classList.add(IS_HIDDEN);

            // setTimeout(() => {
                
            // }, 5000);
        });
    }
    
    setValues(data) {
        const isMembro = data.cpf;
        
        data = isMembro ? data : data[0];
        
        if (this.dataFotoResult) {
            const pathFoto = this.dataFotoResult.dataset.searchFotoPath;
            this.dataFotoResult.setAttribute('src', `${pathFoto}/${data.ncarteirinha}/${data.foto}`);
            this.semFoto.classList.remove(D_FLEX);
        } else {
            this.dataFotoResult.classList.add(IS_HIDDEN);
            this.semFoto.classList.remove(IS_HIDDEN);
        }

        this.dataNameResult.innerHTML = isMembro ? data.nome : data.nomeFantasma;
        this.dataIdResult.innerHTML = data.ncarteirinha;
        this.dataExpedidoResult.innerHTML = data.expedido;
        this.dataValidadeResult.innerHTML = data.vigencia;
        this.dataSituacaoResult.innerHTML = data.ativo ? 'Ativo' : 'Inativo';
    }
}
