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
            {'visible': false, 'targets': [0]}
            // {
            //     "targets": -1,
            //     "data": null,
            //     "searchable": false,
            //     "defaultContent": "<button>Contatta</button>"
            // }
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

        jQuery.noConflict();
        $('#scheduleCalendar').modal('toggle');
    });

    Number.prototype.toRoman = function () {
        var _r = [
                "M", 1000, "CM", 900, "D", 500, "CD", 400, "C", 100, "XC", 90, "L", 50, "XL", 40,
                "X", 10, "IX", 9, "V", 5, "IV", 4, "I", 1
            ],
            n = this, i = 0, output = "";
        while (n > 0) {
            if (n >= _r[i + 1]) {
                output += _r[i];
                n -= _r[i + 1];
            } else {
                i += 2;
            }
        }
        return output;
    };
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
        var sHTML = "",
            squadre = teams;
        for (var g = 0; g < giornate.length; g++) {
            sHTML += (g + 1).toRoman() + ". Giornata<ul>";
            for (var i = 0; i < giornate[g].length; i += 2) {
                sHTML += "<li>" + squadre[giornate[g][i]].name + " - " + squadre[giornate[g][i + 1]].name + "</li>";
            }
            sHTML += "</ul>";
        }
        console.log(sHTML);
    }
});