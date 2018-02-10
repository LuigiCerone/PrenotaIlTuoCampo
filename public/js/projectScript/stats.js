$(function () {
        // Change the active element in the nav bar.
        var element = $('ul.nav.navbar-nav').find('li.active');
        $(element).removeClass('active');
        // console.log(element);
        // $('#about_us').addClass('active');

        var barGraph = null;
        var counts = [];
        var sports = [], chartdata = [], partners = [];

        var sportsNumber = $(' #sportsNumber').val();

        $(document).ready(function () {
            $.ajax({
                type: "GET",
                url: "resources/src/getStats.php",
                success: function (response) {
                    console.log(response);
                    response = JSON.parse(response);
                    sports = response.sports;
                    partners = response.partners;

                    // Bookings chart.
                    createLineChart();

                    // Partners chart.
                    createPileChart();

                    // Sports chart.
                    createCakeChart();
                },
                error: function (response) {
                    console.log(response);
                }
            });
        });

        function createLineChart() {
            for (var i = 0; i < 12; i++) {
                counts[i] = 0;
            }
            sports.forEach(function (value) {
                counts[value.month - 1] += value.count;
            });

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

            var ctx = $("#lineChart");
            barGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata
            });
        }

        $('input:checkbox').change(function () {
            if ($(this).is(':checked')) {
                addDatasetToChart($(this).val(), $(this).attr('id'));
            } else {
                removeDatasetFromChart($(this).val(), $(this).attr('id'));
            }
        });

        function addDatasetToChart(name, id) {
            var sport = [];
            for (var i = 0; i < 12; i++) {
                sport[i] = 0;
            }
            sports.forEach(function (value) {
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
            });
        }

        function createPileChart() {
            var count = [];
            var names = [];
            partners.forEach(function (partner) {
                count.push(partner.count);
                names.push(partner.name);
                // data.push({'count': partner.count, 'name': partner.name});
            });

            var piledata = {
                labels: names,
                datasets: [
                    {
                        label: 'Numero prenotazioni per partner',
                        backgroundColor: '#7f90a3',
                        borderColor: '#002147',
                        hoverBackgroundColor: '#1A3759',
                        hoverBorderColor: '#002147',
                        data: count
                    }
                ]
            };

            var ctx = $("#pileChart");
            var pileGraph = new Chart(ctx, {
                type: 'bar',
                data: piledata,
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
        }

        function createCakeChart() {
            var number = new Map();
            sports.forEach(function (sport) {
                var x = number.get(sport.name);
                if (x)
                    number.set(sport.name, x + sport.count);
                else
                    number.set(sport.name, sport.count);
            });

            console.log(number);

            var cakedata = {
                labels: Array.from(number.keys()),
                datasets: [
                    {
                        label: 'Numero prenotazioni per sport',
                        borderColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        backgroundColor: [
                            'rgba(255,99,132,1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        data: Array.from(number.values())
                    }
                ]
            };

            var ctx = $("#cakeChart");
            var pileGraph = new Chart(ctx, {
                type: 'doughnut', // Oppure pie, oppure doughnut, oppure polarArea
                data: cakedata
            });
        }
    }
);