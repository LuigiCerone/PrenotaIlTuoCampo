$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#partners').addClass('active');

    $('#savePartners').on('click', function (event) {
        event.preventDefault();

        var name = $('#partenersText').val();
        var info = $('#descriptionText').val();
        var region = $('#regionText').val();
        var area = $('#areaText').val();
        var addr = $('#addressText').val();
        var email = $('#emailText').val();
        var number = $('#numberText').val();

        $.ajax({
            type: "POST",
            url: "resources/src/insertPartners.php",
            data: {
                'name': name,
                'description': info,
                'region': region,
                'area': area,
                'address': addr,
                'email': email,
                'telnumber': number
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

    $('#partnersTable').DataTable({
        searching: true,
        stateSave: true,
        colReorder: true,
        paging: false,
        scrollCollapse: true,
        dom: 'Brftip',
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
            {'visible': false, 'targets': [0]},
            {
                "targets": -2,
                "data": null,
                "searchable": false,
                "defaultContent": "<button>Aggiungi campo</button>"
            },
            {
                "targets": -1,
                "data": null,
                "searchable": false,
                "defaultContent": "<button>Modifica disponibilità</button>"
            }
        ],
        buttons: [
            {
                extend: 'pdf',
                text: 'Salva PDF',
                exportOptions: {
                    columns: ':visible'
                }
            }
        ]
    });
});