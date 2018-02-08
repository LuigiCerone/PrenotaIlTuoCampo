$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#tournament').addClass('active');


    var validTable = $('#notValidBookingTable').DataTable({
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
            }
        },
        columnDefs: [
            {'visible': false, 'targets': [0]},
            {
                "targets": -1,
                "data": null,
                "searchable": false,
                "defaultContent": "<button class=\"valid\">Approva disdetta</button>"
            }
        ]
    });


    var approvedTable = $('#notApprovedBookingTable').DataTable({
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
            }
        },
        columnDefs: [
            {'visible': false, 'targets': [0]},
            {
                "targets": -1,
                "data": null,
                "searchable": false,
                "defaultContent": "<button class=\"approved\">Approva prenotazione</button>"
            }
        ]
    });

    $('#notValidBookingTable').on('click', 'button.valid', function () {
        var data = validTable.row($(this).parents('tr')).data();
        var selectedBooking = data[0];
        $.ajax({
            type: "POST",
            url: "resources/src/deleteBooking.php",
            data: {
                'id': selectedBooking
            },
            success: function (response) {
                console.log(response);
                window.location.reload();
            },
            error: function (response) {
                console.log(response);

            }
        });
    });

    $('#notApprovedBookingTable').on('click', 'button.approved', function () {
        var data = approvedTable.row($(this).parents('tr')).data();
        var selectedBooking = data[0];
        $.ajax({
            type: "POST",
            url: "resources/src/approveBooking.php",
            data: {
                'id': selectedBooking
            },
            success: function (response) {
                console.log(response);
                window.location.reload();
            },
            error: function (response) {
                console.log(response);

            }
        });
    });
});