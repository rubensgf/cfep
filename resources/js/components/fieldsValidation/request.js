
export const request = (term, doc) => {
    const docStatus = document.getElementById('doc-status');
    const btnSubmit = document.getElementById('submit');
    const urlApi = './api';
    // const urlApi = '//cfepmembros.com.br/api/';
    const docType = doc;

    const request = $.get(`${urlApi}/${docType}/${term}`);
    
    request.done((data) => {
        data = data == 'true' ? true : false;

        if (data) {
            $(docStatus).html('');
            btnSubmit.disabled = false;
        } else {
            $(docStatus).html('<span style="color:red">✘ Documento já cadastrado</span>');
            btnSubmit.disabled = true;
        }
    })

    request.fail(() => {
        $(docStatus).html("<span style='color:red'>Erro ao consultar documento</span>");
        // btnSubmit.disabled = true;
    })
}
