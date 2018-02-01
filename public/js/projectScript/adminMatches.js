$(function () {
    // Change the active element in the nav bar.
    // var element = $('ul.nav.navbar-nav').find('li.active');
    var element = $('ul.nav.navbar-nav').find('li.active');
    var selectedMatch = null;

    $(element).removeClass('active');
    // console.log(element);
    $('#tournaments').addClass('active');


    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        $.fn.dataTable.tables({visible: true, api: true}).columns.adjust();
    });

    $('#table_0').addClass("active");
    $('#tabs').first().children().first().addClass("active");

    $('.table.table').DataTable({
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
            {'visible': false, 'targets': [0]}
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

    $.datepicker.regional['it'] = {
        closeText: 'Chiudi', // set a close button text
        currentText: 'Oggi', // set today text
        monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'], // set month names
        monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'], // set short month names
        dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'], // set days names
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'], // set short day names
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gio', 'Ve', 'Sa'], // set more short days names
        dateFormat: 'yy-mm-dd',
        minDate: 1
    };

    $("#dateMatch").datepicker($.datepicker.regional['it']);
    $("#dateMatch").datepicker();

    $('#timeMatch').timepicker({
        template: 'modal',
        minTime: '9:00am',
        maxTime: '11:00pm',
        disableTextInput: true,
        timeFormat: 'G:i',
        step: 60
    });


    $('.table.table').on('click', 'tr', function (event) {
        event.stopPropagation();
        var tableId;
        tableId = (this).closest('table').id;
        var table = $('#' + tableId).DataTable();
        var data = table.row(this).data();
        selectedMatch = data;
        console.log(selectedMatch[0]);

        $('#modifyMatch').modal('toggle');
        $('#modifyMatch').removeData();
    });

    // // codes works on all bootstrap modal windows in application
    // $(document.body).on('hidden.bs.modal', function () {
    //     $('#modifyMatch').removeData('bs.modal');
    // });

    $('#searchFields').on('click', function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "resources/src/adminGetFields.php",
            data: {
                'sport': $('#sport').val(),
                'partner': $('#partner').val(),
                'date': $('#dateMatch').val(),
                'time': $('#timeMatch').val()
            },
            success: function (response) {
                response = JSON.parse(response);
                console.log(response);
                $('#fields').html("");

                var radioHTML = "";
                response.forEach(function (field) {
                    radioHTML += "<label><input type='radio' name='field' id='" + field.id + "'value='" + field.id + "' required/>Campo numero: " + field.number + ", esterno : " + (field.outdoor == 1 ? "Si" : "No") + ", riscaldato : " + (field.warmed == 1 ? "Si" : "No") + "</label><br>";
                });

                $('#fields').html(radioHTML);
            },
            error: function (response) {
                $("#error").html("Error.");
                console.log(response);
            }
        });
    });

    $('#formInfo').submit(function (event) {
        event.preventDefault();

        $.ajax({
            type: "POST",
            url: "resources/src/insertNewBooking.php",
            data: {
                'date': $('#dateMatch').val(),
                'time': $('#timeMatch').val(),
                'field': $("input[name=field]:checked").val(),
                'match': selectedMatch[0]
            },
            success: function (response) {
                window.location.reload();
            },
            error: function (response) {
                $("#error").html("Error.");
                console.log(response);
            }
        });
    })
});