$(function () {
    // Change the active element in the nav bar.
    var element = $('ul.nav.navbar-nav').find('li.active');
    $(element).removeClass('active');
    // console.log(element);
    // $('#about_us').addClass('active');

    var barGraph = null;
    var counts = [];
    var json = [], chartdata = [];

    var sportsNumber = $(' #sportsNumber').val();
    console.log("Number: " + sportsNumber);

    $(document).ready(function () {
        $.ajax({
            type: "GET",
            url: "resources/src/getStats.php",
            success: function (response) {
                console.log(response);
                json = JSON.parse(response);
                for (var i = 0; i < 12; i++) {
                    counts[i] = 0;
                }
                json.forEach(function (value) {
                    counts[value.month - 1] += value.count;
                });
                console.log(counts);
                createChart();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });

    function createChart() {
        chartdata = {
            labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
            datasets: [
                {
                    label: 'Numero prenotazioni per mese',
                    borderColor: '#002147',
                    hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                    hoverBorderColor: 'rgba(200, 200, 200, 1)',
                    data: counts
                }
            ]
        };

        var ctx = $("#pileChart");
        barGraph = new Chart(ctx, {
            type: 'line',
            data: chartdata
        });
    }

    $('input:checkbox').change(function () {
        if ($(this).is(':checked')) {
            // console.log($(this).val());
            addDatasetToChart($(this).val(), $(this).attr('id'));
        } else {
            console.log("Unchecked");
            removeDatasetFromChart($(this).val(), $(this).attr('id'));
        }
    });

    function addDatasetToChart(name, id) {
        var sport = [];
        for (var i = 0; i < 12; i++) {
            sport[i] = 0;
        }
        json.forEach(function (value) {
            if (value.sportId == id)
                sport[value.month - 1] = (value.count);
        });

        var newDataset = {
            label: name,
            borderColor: '#000',
            hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
            hoverBorderColor: 'rgba(200, 200, 200, 1)',
            data: sport,
        }

        // You add the newly created dataset to the list of `data`
        chartdata.datasets.push(newDataset);

        // You update the chart to take into account the new dataset
        barGraph.update();
    }

    function removeDatasetFromChart(name, id) {
        chartdata.datasets.forEach(function (dataset) {
            if (dataset.label === name) {
                // Dataset found.
                var removalIndex = chartdata.datasets.indexOf(dataset); //Locate index.
                if (removalIndex >= 0) { //make sure this element exists in the array
                    chartdata.datasets.splice(removalIndex, 1);
                    barGraph.update();
                }
            }
        })
    }
});