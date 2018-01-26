$(function () {

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

    $('#sport').typeahead(
        {
            minLength: 3,
            source: function (query, process) {
                objects = [];
                map = {};
                var data = [{"id": 1, "sport": "Calcio"}, {"id": 2, "sport": "Pallavolo"}]; // Or get your JSON dynamically and load it into this variable
                $.each(data, function (i, object) {
                    map[object.sport] = object;
                    objects.push(object.sport);
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
})
;