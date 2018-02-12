$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#accounts').addClass('active');

    var selectedPartner = [], selectedUser = [];

    $('#savePartners').submit(function () {
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
            },
            error: function (response) {
            }
        });
    });

    var partnersTable = $('#partnersTable').DataTable({
        searching: true,
        stateSave: true,
        colReorder: true,
        paging: true,
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
            {'visible': false, 'targets': [0]},
        ]
    });


    var usersTable = $('#usersTable').DataTable({
        searching: true,
        stateSave: true,
        colReorder: true,
        paging: true,
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
            {'visible': false, 'targets': [0]}
        ]
    });

    $('#partnersTable tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            selectedPartner = [];
        }
        else {
            partnersTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            selectedPartner = partnersTable.row($(this)).data();
            $('#partner').text(selectedPartner[1]);
        }
        checkButtonState();
    });

    $('#usersTable tbody').on('click', 'tr', function () {
        if ($(this).hasClass('selected')) {
            $(this).removeClass('selected');
            selectedUser = [];
        }
        else {
            usersTable.$('tr.selected').removeClass('selected');
            $(this).addClass('selected');
            selectedUser = usersTable.row($(this)).data();
            $('#user').text(selectedUser[1] + " " + selectedUser[2]);
            console.log(selectedUser);
        }
        checkButtonState();
    });

    function checkButtonState() {
        if (selectedPartner.length > 0 && selectedUser.length > 0) {
            $('#addModerator').prop('disabled', false);
        } else {
            $('#addModerator').prop('disabled', true);
        }
    }

    $('#addModerator').on('click', function (event) {
        event.preventDefault();
        $('#addModeratorModal').modal('toggle');
    });

    $('#saveUser').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "resources/src/addModerator.php",
            data: {
                'user': selectedUser[0],
                'partner': selectedPartner[0]
            },
            success: function (response) {
                console.log(response);
                // window.location.reload();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
});