$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    $('#news').addClass('active');

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

    $("#titleDate").datepicker($.datepicker.regional['it']);
    $("#titleDate").datepicker();

    $('#addNewForm').submit(function (event) {

        var title = $('#titleNews').val();
        var date = $('#titleDate').val();
        var text = $('#textNews').val();

        $.ajax({
            type: "POST",
            url: "resources/src/insertNews.php",
            data: {
                'title': title,
                'date': date,
                'text': text
            },
            success: function (response) {
                console.log(response);
            },
            error: function (response) {
                console.log(response);
            },
        });
    });
});