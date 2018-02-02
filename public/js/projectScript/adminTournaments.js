$(function () {
    // Change the active element in the nav bar.
    // var element = $('ul.nav.navbar-nav').find('li.active');
    var element = $('ul.nav.navbar-nav').find('li.active');
    var selectedTournament = null, teams = [];
    $(element).removeClass('active');
    // console.log(element);
    $('#tournaments').addClass('active');

    var tournamentsTable = $('#tournamentsTable').DataTable({
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
                "defaultContent": "<button>Gestione partite</button>"
            }
        ]
    });
    jQuery('#tournamentsTable').wrap('<div class="dataTables_scroll" />');


    $('#tournamentsTable').on('click', 'tr.pending', function () {
        var data = tournamentsTable.row(this).data();
        selectedTournament = data[0];

        // Get all the teams that are subscribed to that tournament.
        $.ajax({
            type: "POST",
            url: "resources/src/modifyTeam.php",
            data: {
                'tournament': selectedTournament
            },
            success: function (response) {
                response = JSON.parse(response);
                response.forEach(function (team) {
                    teams.push(team);
                });
                creaCalendario();
            },
            error: function (response) {
                $("#error").html("Error.");
                console.log(response);
            }
        });

        $('#scheduleCalendar').modal('toggle');
    });

    var giornate = [
        [
            0, 7,
            1, 2,
            3, 6,
            4, 5,
            9, 8
        ], [2, 0,
            5, 9,
            6, 4,
            7, 3,
            8, 1
        ], [0, 8,
            1, 5,
            3, 2,
            7, 6,
            9, 4
        ], [2, 7,
            4, 1,
            5, 0,
            6, 9,
            8, 3
        ], [0, 4,
            1, 9,
            2, 6,
            3, 5,
            7, 8
        ], [4, 3,
            5, 7,
            6, 1,
            8, 2,
            9, 0
        ], [0, 1,
            2, 5,
            3, 9,
            7, 4,
            8, 6
        ], [0, 6,
            1, 3,
            4, 2,
            5, 8,
            9, 7
        ], [2, 9,
            3, 0,
            6, 5,
            7, 1,
            8, 4
        ]
    ];

    function creaCalendario() {
        var matches = [];
        for (var day = 0; day < giornate.length; day++) {
            for (var i = 0; i < giornate[day].length; i += 2) {
                matches.push({
                    'day': day,
                    'first_team_fk': teams[giornate[day][i]].id,
                    'second_team_fk': teams[giornate[day][i + 1]].id,
                    'tournament': selectedTournament
                });
            }
        }
        console.log(matches);
        $.ajax({
            type: "POST",
            url: "resources/src/createCalendar.php",
            data: {
                'matches': matches
            },
            success: function (response) {
                console.log('ok');
                window.location.reload();
            },
            error: function (response) {
                $("#error").html("Error.");
                console.log(response);
            }
        });
    }

    $('#tournamentsTable').on('click', 'button', function () {
        var data = tournamentsTable.row($(this).parents('tr')).data();
        console.log("Id:" + data[0]);

        window.location.href = "adminMatches.php?t=" + data[0];
    });
});