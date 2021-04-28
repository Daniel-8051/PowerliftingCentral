$(document).ready(function() {
    // get lifter name to search
    const queryString = window.location.search;

    const urlParams = new URLSearchParams(queryString);

    const lifterName = urlParams.get('info');

    const lifterNameEncoded = encodeURIComponent(lifterName.replace(/\+/g, '%20'));

    console.log(lifterNameEncoded);

    // make ajax call to API with lifter name - plot data on graph
    $.ajax({
        url: 'http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/api/lifter/sort/date_name.php?orderby=date&name=' + lifterNameEncoded,
        method: "GET",
        success: function(data) {
            // print out lifter objects (as json)
            console.log(data);

            // arrays to hold vars
            var lifter_squat_numbers = [];
            var lifter_bench_numbers = [];
            var lifter_deadlift_numbers = [];
            var lifter_total_numbers = [];
            var lifter_competition_dates = [];

            // loop through json array
            for (var i in data) {
                // get dates of lifter
                var dateValue = data[i].date;
                var date = dateValue.toString();

                // get squat numbers
                var best_squat = data[i].best_squat;

                // get bench numbers
                var best_bench = data[i].best_bench;

                // get deadlift numbers
                var best_deadlift = data[i].best_deadlift;

                // get total numbers
                var total = data[i].total;

                // add values to array
                lifter_competition_dates.push(date);
                lifter_squat_numbers.push(best_squat);
                lifter_bench_numbers.push(best_bench);
                lifter_deadlift_numbers.push(best_deadlift);
            }



            var ctx = document.getElementById('lifter_chart').getContext('2d');

            // global options
            Chart.defaults.global.defaultFontFamily = 'Nunito';
            Chart.defaults.global.defaultFontSize = 14;
            Chart.defaults.global.defaultFontColor = 'black';

            var config = {
                type: 'line',
                data: {
                    labels: lifter_competition_dates,

                    datasets: [{
                            // Squat data
                            label: 'Squat',
                            fill: 'false',
                            backgroundColor: 'red',
                            data: lifter_squat_numbers,
                            pointBackgroundColor: '#df6d46',
                            borderWidth: 3,
                            borderColor: 'red',
                            hoverBorderWidth: 3,
                            hoverBorderColor: '#000'
                        },
                        // Bench data
                        {
                            label: 'Bench',
                            fill: 'false',
                            backgroundColor: 'blue',
                            data: lifter_bench_numbers,
                            pointBackgroundColor: '#df6d46',
                            borderWidth: 2,
                            borderColor: 'blue',
                            hoverBorderWidth: 3,
                            hoverBorderColor: '#000'
                        },

                        // Deadlift data
                        {
                            label: 'Deadlift',
                            fill: 'false',
                            backgroundColor: 'green',
                            data: lifter_deadlift_numbers,
                            pointBackgroundColor: '#df6d46',
                            borderWidth: 2,
                            borderColor: 'green',
                            hoverBorderWidth: 3,
                            hoverBorderColor: '#000'
                        },
                    ]
                },
                options: {
                    respnsive: true,
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: false
                            }
                        }]
                    }
                }

            };

            var lifter_chart = new Chart(ctx, config);

            $('#0').click(function() {
                var lifter_chart = new Chart(ctx, config);
                var chartConfig = lifter_chart.config.data;
                chartConfig.datasets[0].data = lifter_squat_numbers;
                chartConfig.datasets[1].data = lifter_bench_numbers;
                chartConfig.datasets[2].data = lifter_deadlift_numbers;
                chartConfig.datasets[0].label = 'Squat';
                chartConfig.datasets[0].label = 'Bench';
                chartConfig.datasets[0].label = 'Deadlift';
                chartConfig.labels = lifter_competition_dates;
                var chartType = lifter_chart.config;
                chartType.label = 'line';
                lifter_chart.update();
            });

            $('#1').click(function() {
                // lifter_chart.destroy();

                var lifter_total_numbers = [];

                // loop through json array
                for (var i in data) {

                    // get total numbers
                    var total = data[i].total;

                    // add values to array
                    lifter_total_numbers.push(total);

                }



                var ctx1 = document.getElementById('lifter_chart').getContext('2d');

                // global options
                Chart.defaults.global.defaultFontFamily = 'Nunito';
                Chart.defaults.global.defaultFontSize = 14;
                Chart.defaults.global.defaultFontColor = 'black';

                var config1 = {
                    type: 'bar',
                    data: {
                        labels: lifter_competition_dates,

                        datasets: [{
                            // Total data
                            label: 'Total',
                            fill: 'false',
                            backgroundColor: 'red',
                            data: lifter_total_numbers,
                            pointBackgroundColor: '#df6d46',
                            borderWidth: 3,
                            borderColor: 'red',
                            hoverBorderWidth: 3,
                            hoverBorderColor: '#000'
                        }, ]
                    },
                    options: {
                        respnsive: true,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }

                };

                var lifter_chart = new Chart(ctx1, config1);
            });


        },
        error: function(data) {
            console.log(data);
        }
    });
});