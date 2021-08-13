// Filtrar tabela

export default class FilterTable {
    constructor(elem) {
        this.element = document.querySelector(elem);

        if (this.element) {
            this.setFilter();
        }
    }

    setFilter() {
        $('[data-filter-table]').on('keyup', function () {
            let value = $(this).val().toLowerCase();
            $('[data-filter-table] tr').filter(function () {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    }
}
