$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    var findPlayerTable = null;

    $("#openFinder").on('click', function () {
        $("#error").html("<img id='loading_img' src='public/images/loading.webp' /> Caricamento...");
        $.ajax({
            type: "POST",
            url: "resources/src/getAvailabilities.php",
            data: {
                'sport': $('#selectedSport').html(),
                'partner': $('#selectedPartner').html(),
                'date': $('#date').html(),
                'time': $('#time').html()
            },
            success: function (response) {
                $("#error").html("");
                response = JSON.parse(response);
                var matrix = [];
                response.forEach(function (item) {
                    var ar = [];
                    ar.push(item.id);
                    ar.push(item.firstName);
                    ar.push(item.lastName);
                    ar.push(item.gender);
                    matrix.push(ar);
                });
                if (findPlayerTable != null) {
                    // La datatable deve essere distrutta prima di essere ripopolata.
                    $('#findPlayerTable').dataTable().fnDestroy();
                }
                createFindPlayersTable(matrix);
                // window.location = "activateAccount.php";
            },
            error: function (response) {
                $("#error").html("Error.");
                console.log(response);
            }
        });
    });

    // Inizializzazione della tabella dei giocatori disponibili.
    function createFindPlayersTable(data) {
        findPlayerTable = $('#findPlayerTable').DataTable({
            searching: true,
            stateSave: true,
            colReorder: true,
            paging: false,
            scrollCollapse: true,
            data: data,
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
            "columns": [
                {"title": "id"},
                {"title": "Nome"},
                {"title": "Cognome"},
                {"title": "Sesso"},
                {"title": "Contatta"}
            ],
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
        jQuery('#findPlayerTable').wrap('<div class="dataTables_scroll" />');
    }

    $('#findPlayerTable').on('click', 'button', function () {
        var data = findPlayerTable.row($(this).parents('tr')).data();
        console.log("valore:" + data[0]);
    });
});