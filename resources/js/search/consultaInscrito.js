// Consulta de Membros


// Consulta de Membros

$(document).ready(function () {
    $('[data-filter-table]').on('keyup', function () {
        let value = $(this).val().toLowerCase();
        $('[data-filter-table] tr').filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


