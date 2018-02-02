$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#partners').addClass('active');

    var selectedPartner = null;

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

    var partnersTable = $('#partnersTable').DataTable({
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
                "defaultContent": "<button class=\"field\">Aggiungi campo</button>"
            },
            {
                "targets": -1,
                "data": null,
                "searchable": false,
                "defaultContent": "<button class=\"item\">Modifica disponibilità</button>"
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

    $('#partnersTable').on('click', 'button.field', function () {
        var data = partnersTable.row($(this).parents('tr')).data();
        selectedPartner = data[0];
        console.log("Id:" + data[0]);

        $('#addField').modal('toggle');
    });

    $('#partnersTable').on('click', 'button.item', function () {
        var data = partnersTable.row($(this).parents('tr')).data();
        selectedPartner = data[0];
        console.log("Id:" + data[0]);
        $('#modifyItems').modal('toggle');
    });
});