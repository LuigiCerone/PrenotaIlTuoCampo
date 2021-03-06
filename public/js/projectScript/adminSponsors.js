$(function () {
    // Change the active element in the nav bar.
    // var element = $('ul.nav.navbar-nav').find('li.active');
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#tournaments').addClass('active');

    var sponsorsTable = $('#sponsorsTable').DataTable({
        searching: true,
        stateSave: true,
        colReorder: true,
        paging: false,
        scrollCollapse: true,
        dom: 'rftip',
        language: {
            'lengthMenu': 'Mostrate _MENU_ righe per pagina',
            'zeroRecords': 'Nessun risultato trovato',
            'info': 'Pagina _PAGE_ di _PAGES_',
            'infoEmpty': 'Nessun risultato trovato',
            'infoFiltered': '(filtrate da _MAX_ righe totali)',
            'search': 'Cerca',
            'paginate': {
                'first': 'Prima',
                'last': 'Ultima',
                'next': 'Succ.',
                'previous': 'Prec.'
            },
            buttons: {
                colvis: 'Seleziona colonne'
            }
        },
        columnDefs: [
            {'visible': false, 'targets': [0]}]
    });
    jQuery('#sponsorsTable').wrap('<div class="dataTables_scroll" />');

    $('#addSponsor').on('click', function (event) {
        event.preventDefault();

        $('#addSponsorModal').modal('toggle');
    });

    $('#sponsorForm').submit(function (event) {
        $.ajax({
            type: "POST",
            url: "resources/src/insertNewSponsor.php",
            data: {
                'tournament': $('#tournament').val(),
                'sponsor': $('#selectSponsor').val(),
                'money': $('#money').val(),
            },
            success: function (response) {

            },
            error: function (response) {
                $("#error").html("Error.");
                console.log(response);
            }
        });
    });
});