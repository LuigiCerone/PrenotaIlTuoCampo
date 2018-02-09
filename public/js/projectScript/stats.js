$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    // $('#about_us').addClass('active');

    var counts = [];
    var months = [];

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "resources/src/getStats.php",
            success: function (response) {
                console.log(response);
                response = JSON.parse(response);
                for (var i = 0; i < 12; i++) {
                    counts[i] = 0;
                }
                response.forEach(function (value) {
                    counts[value.month - 1] = (value.count);
                });
                createChart();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });

    function createChart() {
        var chartdata = {
            labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
            datasets: [
                {
                    label: 'Numero prenotazioni per mese',
                    backgroundColor: 'rgba(52, 77, 107, 0.6)',
                    borderColor: '#002147',
                    hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                    hoverBorderColor: 'rgba(200, 200, 200, 1)',
                    data: counts
                }
            ]
        };

        var ctx = $("#pileChart");
        var barGraph = new Chart(ctx, {
            type: 'line',
            data: chartdata
        });
    }
});