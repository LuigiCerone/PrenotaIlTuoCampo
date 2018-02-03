$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    // $('#news').addClass('active');
    var id = null;

    var selectedProvince = null, selectedSport = null, selectedPartner = null;
    var sportsData = null, provincesData = [], partnersData = [];


    $.datepicker.regional['it'] = {
        closeText: 'Chiudi', // set a close button text
        currentText: 'Oggi', // set today text
        monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'], // set month names
        monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'], // set short month names
        dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'], // set days names
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'], // set short day names
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gio', 'Ve', 'Sa'], // set more short days names
        dateFormat: 'yy-mm-dd',
        minDate: 0
    };

    $("#datepicker").datepicker($.datepicker.regional['it']);
    $("#datepicker").datepicker();


    $('#timepicker').timepicker({
        minTime: '9:00am',
        maxTime: '11:00pm',
        disableTextInput: true,
        timeFormat: 'G:i',
        template: 'modal',
        step: 60
    });

    // Sports data fetcher.
    $.ajax({
        type: "get",
        url: "resources/src/getSports.php",
        success: function (data) {
            // console.log(data);
            sportsData = data;
        },
        error: function (data) {
            console.log(data);
        }
    });


    var objects = [];
    var map = {};

    // Sports typeahead.
    $('#sport').typeahead({
        minLength: 3,
        source: function (query, process) {
            objects = [];
            map = {};
            $.each(sportsData, function (i, object) {
                map[object.name] = object;
                objects.push(object.name);
            });
            process(objects);
        },
        matcher: function (item) {
            if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
                return true;
            }
        },
        updater: function (item) {
            selectedSport = map[item].id;
            populateProvinces();
            // console.log(selectedSport);
            return item;
        }
    }).blur(function () {
        if (map[$(this).val()] == null) {
            $('#sport').val('');
        }
    });

    $('#sport').on('focus', function () {
        provincesData = [];
        partnersData = [];
    });

    $('#addAvailability').on('hidden.bs.modal', function () {
        console.log("Closed");
        $("#addAvailability input").val("");

        sportsData = [];
        provincesData = [];
        provincesData = [];

        selectedSport = selectedPartner = selectedProvince = null;
    })

    function populateProvinces() {
        $.ajax({
            type: "get",
            url: "resources/src/getSports.php",
            data: {
                sport: selectedSport
            },
            success: function (data) {
                // console.log(data);

                data.forEach(function (value) {
                    provincesData.push({'province_fk': value.province_fk, 'province_name': value.province_name});
                    partnersData.push({'partner_fk': value.partner_fk, 'partner_name': value.partner_name});
                });
                // console.log(provincesData);
                // console.log(partnersData);
            },
            error: function (data) {
                console.log(data);
            }
        });
    }

    $('#province').typeahead({
        minLength: 1,
        source: function (query, process) {
            objects = [];
            map = {};
            $.each(provincesData, function (i, object) {
                map[object.province_name] = object;
                objects.push(object.province_name);
            });
            process(objects);
        },
        matcher: function (item) {
            if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
                return true;
            }
        },
        updater: function (item) {
            selectedProvince = map[item].province_fk;
            console.log(selectedProvince);
            return item;
        }
    }).blur(function () {
        if (map[$(this).val()] == null) {
            console.log("HERE");
            $('#province').val('');
        }
    });

    $('#partner').typeahead({
        minLength: 1,
        source: function (query, process) {
            objects = [];
            map = {};
            $.each(partnersData, function (i, object) {
                map[object.partner_name] = object;
                objects.push(object.partner_name);
            });
            process(objects);
        },
        matcher: function (item) {
            if (item.toLowerCase().indexOf(this.query.trim().toLowerCase()) != -1) {
                return true;
            }
        },
        updater: function (item) {
            selectedPartner = map[item].partner_fk;
            console.log(selectedPartner);
            return item;
        }
    }).blur(function () {
        if (map[$(this).val()] == null) {
            $('#partner').val('');
        }
    });

    $('#form').submit(function (event) {

        // New availability data.
        var data = $('#datepicker').val();

        var params = {
            'date': data,
            'sport': selectedSport,
            'partner': selectedPartner
        };

        if ($('#allDay').is(':checked'))
            params.isAll = true;
        else
            params.time = $('#timepicker').val();

        $.ajax({
            type: "POST",
            url: "resources/src/insertNewAvailability.php",
            data: params,
            success: function (response) {
                console.log(response);
                // window.location = "activateAccount.php";
                window.location.reload();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });

    var prevent = false;
    $('input').focus(function () {
        prevent = true;
    }).blur(function () {
        prevent = false;
    });

    $('form').submit(function () {
        if (prevent) {
            return false;
        }
    });

    $('.delete').on('click', function (event) {
        event.stopPropagation();

        id = $(this).data("id");
        console.log(id);

        $('#removeAvailability').modal('toggle');
    });

    $('#saveChange').click(function () {
        $.ajax({
            type: "POST",
            url: "resources/src/modifyAvailability.php",
            data: {
                'availability': id
            },
            success: function (response) {
                $("#error").html("OK");
                console.log(response);
                // window.location.reload();
            },
            error: function (response) {
                $("#error").html("Error in signup");
                console.log(response);
            },
            beforeSend: function () {
                $("#saveChange").prop('disabled', true);
            },
            complete: function () {
                $("#saveChange").prop('disabled', false);
                window.location.reload();
            }
        });
    });

    $('#cancel').on('click', function () {
        id = null;
    });
    $('#allDay').change(function () {
        if ($(this).is(':checked')) {
            $('#time').addClass('disabled');
        } else {
            $('#time').removeClass('disabled');
        }
    });

});