var ctx = document.getElementById('myJourneyChart').getContext('2d');

// global options
Chart.defaults.global.defaultFontFamily = 'Nunito';
Chart.defaults.global.defaultFontSize = 18;
Chart.defaults.global.defaultFontColor = 'black';

// Would use PHP to populate graph data
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['2014-12-13', '2015-05-30', '2015-08-08', '2016-02-27', '2017-02-25', '2017-07-29', '2018-03-24', '2018-09-22', '2019-04-06'],

        datasets: [{
                // Squat data
                label: 'Squat',
                fill: 'false',
                backgroundColor: 'red',
                data: [
                    145,
                    160,
                    165,
                    167.5,
                    180,
                    185,
                    187.5,
                    192.5,
                    200
                ],
                pointBackgroundColor: [
                    '#df6d46',
                    '#52b1b3',
                    '#ce4f24',
                    '#333333',
                    '#409092',
                    '#222222'
                ],
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
                data: [
                    102.5,
                    107.5,
                    112.5,
                    117.5,
                    120,
                    125,
                    127.5,
                    135,
                    142.5
                ],
                pointBackgroundColor: [
                    '#df6d46',
                    '#52b1b3',
                    '#ce4f24',
                    '#333333',
                    '#409092',
                    '#222222'
                ],
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
                data: [
                    190,
                    185,
                    195,
                    205,
                    202.5,
                    212.5,
                    215,
                    217.5,
                    225
                ],
                pointBackgroundColor: [
                    '#df6d46',
                    '#52b1b3',
                    '#ce4f24',
                    '#333333',
                    '#409092',
                    '#222222'
                ],
                borderWidth: 2,
                borderColor: 'green',
                hoverBorderWidth: 3,
                hoverBorderColor: '#000'
            },
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }]
        }
    }
});