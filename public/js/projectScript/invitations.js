$(function () {
    var selectedInvitation = null, sentTable = null, receivedTable = null;
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    $('#sentInvitations').hide();

    console.log("Ok");
    $('#sent').on('click', function () {
        $('#sentInvitations').show();
        $('#receivedInvitations').hide();
    });

    $('#received').on('click', function () {
        $('#sentInvitations').hide();
        $('#receivedInvitations').show();
    });

    sentTable = $('#sentTable').DataTable({
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
        'columnDefs': [
            {'visible': false, 'targets': [0]}
            // {
            //     "targets": -1,
            //     "data": null,
            //     "searchable": false,
            //     "defaultContent": "<button>Contatta</button>"
            // }
        ]
    });
    jQuery('#sentTable').wrap('<div class="dataTables_scroll" />');

    receivedTable = $('#receivedTable').DataTable({
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
        'columnDefs': [
            {'visible': false, 'targets': [0]}
            // {
            //     "targets": -1,
            //     "data": null,
            //     "searchable": false,
            //     "defaultContent": "<button>Contatta</button>"
            // }
        ]
    });
    jQuery('#receivedTable').wrap('<div class="dataTables_scroll" />');


    $('#receivedTable').on('click', 'tr', function () {
        var data = receivedTable.row(this).data();
        selectedInvitation = data[0];
        jQuery.noConflict();
        $('#changeStatus').modal('toggle');
    });
    $('#sentTable').on('click', 'tr', function () {
        var data = sentTable.row(this).data();
        selectedInvitation = data[0];
        jQuery.noConflict();
        $('#changeStatus').modal('toggle');
    });

    $('#accept').on('click', function () {
        console.log("Accepted");
    });

    $('#decline').on('click', function () {
        console.log("Declined");
    });

});