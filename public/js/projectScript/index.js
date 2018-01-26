$(function () {

    var sportsData = null;

    $.datepicker.regional['it'] = {
        closeText: 'Chiudi', // set a close button text
        currentText: 'Oggi', // set today text
        monthNames: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'], // set month names
        monthNamesShort: ['Gen', 'Feb', 'Mar', 'Apr', 'Mag', 'Giu', 'Lug', 'Ago', 'Set', 'Ott', 'Nov', 'Dic'], // set short month names
        dayNames: ['Domenica', 'Luned&#236', 'Marted&#236', 'Mercoled&#236', 'Gioved&#236', 'Venerd&#236', 'Sabato'], // set days names
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mer', 'Gio', 'Ven', 'Sab'], // set short day names
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Me', 'Gio', 'Ve', 'Sa'], // set more short days names
        dateFormat: 'dd/mm/yy' // set format date
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

    $.ajax({
        type: "get",
        url: "resources/src/getSports.php",
        success: function (data) {
            console.log(data);
            sportsData = data;
        },
        error: function (data) {
            console.log(data);
        }
    });

    $('#sport').typeahead(
        {
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
                console.log(selectedSport);
                return item;
            }
        });
});