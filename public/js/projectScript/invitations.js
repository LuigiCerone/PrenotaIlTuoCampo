$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    $('#sentInvitations').hide();

    console.log("Ok");
    $('#sent').on('click', function () {
        jQuery('#sentTable').wrap('<div class="dataTables_scroll" />');
        $('#sentInvitations').show();
        $('#receivedInvitations').hide();
    });

    $('#received').on('click', function () {
        jQuery('#receivedTable').wrap('<div class="dataTables_scroll" />');
        $('#sentInvitations').hide();
        $('#receivedInvitations').show();
    });

    var sentTable = $('#sentTable').DataTable({
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
            {'visible': false, 'targets': [0]},
            {
                "targets": -1,
                "data": null,
                "searchable": false,
                "defaultContent": "<button>Contatta</button>"
            }
        ]
    });
    jQuery('#sentTable').wrap('<div class="dataTables_scroll" />');

    var receivedTable = $('#receivedTable').DataTable({
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
            {'visible': false, 'targets': [0]},
            {
                "targets": -1,
                "data": null,
                "searchable": false,
                "defaultContent": "<button>Contatta</button>"
            }
        ]
    });
    jQuery('#receivedTable').wrap('<div class="dataTables_scroll" />');
});