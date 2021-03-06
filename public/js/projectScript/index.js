$(function () {
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
        // altFormat: "dd-mm-yy",
        minDate: 1
    };

    $("#datepicker").datepicker($.datepicker.regional['it']);
    $("#datepicker").datepicker();

    $('#timepicker').timepicker({
        minTime: '9:00am',
        maxTime: '11:00pm',
        disableTextInput: true,
        timeFormat: 'G:i',
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
        clean();
    });

    function clean() {
        provincesData = [];
        partnersData = [];
    }

    function populateProvinces() {
        $.ajax({
            type: "get",
            url: "resources/src/getSports.php",
            data: {
                sport: selectedSport
            },
            success: function (data) {
                console.log(data);
                data.forEach(function (value) {
                    provincesData.push({'province_fk': value.province_fk, 'province_name': value.province_name});
                    partnersData.push({'partner_fk': value.partner_fk, 'partner_name': value.partner_name});
                });
            },
            error: function (data) {
                // console.log(data);
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
            // console.log(selectedProvince);
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
            // console.log(selectedPartner);
            return item;
        }
    }).blur(function () {
        if (map[$(this).val()] == null) {
            $('#partner').val('');
        }
    });

    $('#form').submit(function () {
        // event.stopPropagation();
        // event.preventDefault();
        $('#selectedSport').val(selectedSport);
        $('#selectedProvince').val(selectedProvince);
        $('#selectedPartner').val(selectedPartner);
    });

    $('#changePhoto').submit(function (event) {
        var formData = new FormData();
        var fileInfo = $('input[type=file]')[0].files[0];
        formData.append('file', fileInfo, fileInfo.name);
        $.ajax({
            type: "POST",
            url: " resources/src/upload.php",
            data: formData,
            processData: false,
            contentType: false,
            success: function (data) {
                console.log(data);
            },
            error: function (data) {
                console.log(data);
            }
        });
    });
});