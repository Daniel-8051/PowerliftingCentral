$(document).ready(function() {
    $.ajax({
        method: "GET",
        username: "admin",
        password: "password123",
        url: "http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/api/lifter/read.php",
        success: function(data) {

            // PARTICIPATION TRENDS
            // print out lifter objects (as json)
            console.log("inside ajax success");
            console.log(data);
            // arrays to hold vars
            var numOfLiftersPerYear_dataset = [];
            var participation_year_labels = [2013, 2014, 2015, 2016, 2017, 2018];

            // var for number of lifters 2013 & 2014
            var num2013 = 0;
            var num2014 = 0;
            var num2015 = 0;
            var num2016 = 0;
            var num2017 = 0;
            var num2018 = 0;

            var year2013 = 2013;
            var year2014 = 2014;
            var year2015 = 2015;
            var year2016 = 2016;
            var year2017 = 2017;
            var year2018 = 2018;

            // loop through json array
            for (var i in data) {
                // get year of current lifter object
                var dateValue = data[i].date;
                var dateString = dateValue.toString();

                if (dateString.includes(year2013)) {
                    num2013++;
                }

                if (dateString.includes(year2014)) {
                    num2014++;
                }

                if (dateString.includes(year2015)) {
                    num2015++;
                }
                if (dateString.includes(year2016)) {
                    num2016++;
                }
                if (dateString.includes(year2017)) {
                    num2017++;
                }
                if (dateString.includes(year2018)) {
                    num2018++;
                }

            }

            // add count per year to array
            numOfLiftersPerYear_dataset.push(num2013);
            numOfLiftersPerYear_dataset.push(num2014);
            numOfLiftersPerYear_dataset.push(num2015);
            numOfLiftersPerYear_dataset.push(num2016);
            numOfLiftersPerYear_dataset.push(num2017);
            numOfLiftersPerYear_dataset.push(num2018);

            console.log(num2013);
            console.log(num2014);

            // chart
            var ctx = document.getElementById('myChart').getContext('2d');

            // global options
            Chart.defaults.global.defaultFontFamily = 'Nunito';
            Chart.defaults.global.defaultFontSize = 18;
            Chart.defaults.global.defaultFontColor = 'black';

            // Would use PHP to populate graph data
            var config = {
                type: 'bar',
                data: {
                    labels: participation_year_labels,
                    datasets: [{
                        label: 'Particpation',
                        data: numOfLiftersPerYear_dataset,
                        backgroundColor: '#df6d46',
                        borderWidth: 2,
                        borderColor: '#777',
                        hoverBorderWidth: 4,
                        hoverBorderColor: '#000'
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            };

            var myChart = new Chart(ctx, config);

            $('#0').click(function() {
                var chartConfig = myChart.config.data;
                chartConfig.datasets[0].data = numOfLiftersPerYear_dataset;
                chartConfig.datasets[0].label = 'Particpation';
                chartConfig.labels = participation_year_labels;
                myChart.update();
            });

            // MALE / FEMALE WILKS TRENDS
            $('#1').click(function() {
                var male_female_wilks_labels = ['Male', 'Female'];
                var male_female_average_wilks_dataset = [];

                var male_total_wilks = 0;
                var male_total_lifters = 0;
                var female_total_wilks = 0;
                var female_total_lifters = 0;

                // loop through json array
                for (var i in data) {
                    // get year of current lifter object
                    var genderValue = data[i].gender;
                    var genderString = genderValue.toString();
                    lifterWilks = parseInt(data[i].wilks);

                    if (genderString.includes('Male')) {
                        male_total_wilks += lifterWilks;
                        male_total_lifters++;
                    }

                    if (genderString.includes('Female')) {
                        female_total_wilks += lifterWilks;
                        female_total_lifters++;
                    }
                }

                var male_average_wilks = male_total_wilks / male_total_lifters;
                var female_average_wilks = female_total_wilks / female_total_lifters;

                male_female_average_wilks_dataset.push(male_average_wilks);
                male_female_average_wilks_dataset.push(female_average_wilks);

                var chartConfig = myChart.config.data;
                chartConfig.datasets[0].data = male_female_average_wilks_dataset;
                chartConfig.datasets[0].label = 'Average Wilks for Male Vs Female';
                chartConfig.labels = male_female_wilks_labels;
                myChart.update();
            });

            // MALE WILKS PER WEIGHT CLASS
            $('#2').click(function() {
                var male_weight_class_labels = ['53kg', '59kg', '66kg', '74kg', '83kg', '93kg', '105kg', '120kg', '120kg+'];
                var male_wilks_per_weight_class = [];

                var m53_total_wilks = 0;
                var m59_total_wilks = 0;
                var m66_total_wilks = 0;
                var m74_total_wilks = 0;
                var m83_total_wilks = 0;
                var m93_total_wilks = 0;
                var m105_total_wilks = 0;
                var m120_total_wilks = 0;
                var m120p_total_wilks = 0;

                var m53_total_lifters = 0;
                var m59_total_lifters = 0;
                var m66_total_lifters = 0;
                var m74_total_lifters = 0;
                var m83_total_lifters = 0;
                var m93_total_lifters = 0;
                var m105_total_lifters = 0;
                var m120_total_lifters = 0;
                var m120p_total_lifters = 0;

                // loop through json array
                for (var i in data) {
                    // get weight class
                    var weightClassValue = data[i].weight_class;
                    var weightClass = weightClassValue.toString();
                    console.log("Weight class = " + weightClass);
                    // get wilks
                    var wilks = parseInt(data[i].wilks);
                    console.log("Wilks = " + wilks);

                    if (weightClass.includes('M_53kg')) {
                        m53_total_wilks += wilks;
                        m53_total_lifters++;
                    }
                    if (weightClass.includes('M_59kg')) {
                        m59_total_wilks += wilks;
                        m59_total_lifters++;
                    }
                    if (weightClass.includes('M_66kg')) {
                        m66_total_wilks += wilks;
                        m66_total_lifters++;
                    }
                    if (weightClass.includes('M_74kg')) {
                        m74_total_wilks += wilks;
                        m74_total_lifters++;
                    }
                    if (weightClass.includes('M_83kg')) {
                        m83_total_wilks += wilks;
                        m83_total_lifters++;
                    }
                    if (weightClass.includes('M_93kg')) {
                        m93_total_wilks += wilks;
                        m93_total_lifters++;
                    }
                    if (weightClass.includes('M_105kg')) {
                        m105_total_wilks += wilks;
                        m105_total_lifters++;
                    }
                    if (weightClass.includes('M_120kg')) {
                        m120_total_wilks += wilks;
                        m120_total_lifters++;
                    }
                    if (weightClass.includes('M_120+kg')) {
                        m120p_total_wilks += wilks;
                        m120p_total_lifters++;
                    }
                }

                var m53_average_wilks = m53_total_wilks / m53_total_lifters;
                var m59_average_wilks = m59_total_wilks / m59_total_lifters;
                var m66_average_wilks = m66_total_wilks / m66_total_lifters;
                var m74_average_wilks = m74_total_wilks / m74_total_lifters;
                var m83_average_wilks = m83_total_wilks / m83_total_lifters;
                var m93_average_wilks = m93_total_wilks / m93_total_lifters;
                var m105_average_wilks = m105_total_wilks / m105_total_lifters;
                var m120_average_wilks = m120_total_wilks / m120_total_lifters;
                var m120p_average_wilks = m120p_total_wilks / m120p_total_lifters;

                male_wilks_per_weight_class.push(m53_average_wilks);
                male_wilks_per_weight_class.push(m59_average_wilks);
                male_wilks_per_weight_class.push(m66_average_wilks);
                male_wilks_per_weight_class.push(m74_average_wilks);
                male_wilks_per_weight_class.push(m83_average_wilks);
                male_wilks_per_weight_class.push(m93_average_wilks);
                male_wilks_per_weight_class.push(m105_average_wilks);
                male_wilks_per_weight_class.push(m120_average_wilks);
                male_wilks_per_weight_class.push(m120p_average_wilks);


                var chartConfig = myChart.config.data;
                chartConfig.datasets[0].data = male_wilks_per_weight_class;
                chartConfig.datasets[0].label = 'Male Average Wilks per Weight Class';
                chartConfig.labels = male_weight_class_labels;
                myChart.update();
            });

            // FEMALE WILKS PER WEIGHT CLASS
            $('#3').click(function() {
                var female_weight_classes_labels = ['43kg', '47kg', '52kg', '57kg', '63kg', '72kg', '84kg', '84+kg'];
                var female_wilks_per_weight_class = [];

                var f43_total_wilks = 0;
                var f47_total_wilks = 0;
                var f52_total_wilks = 0;
                var f57_total_wilks = 0;
                var f63_total_wilks = 0;
                var f72_total_wilks = 0;
                var f84_total_wilks = 0;
                var f84p_total_wilks = 0;

                var f43_total_lifters = 0;
                var f47_total_lifters = 0;
                var f52_total_lifters = 0;
                var f57_total_lifters = 0;
                var f63_total_lifters = 0;
                var f72_total_lifters = 0;
                var f84_total_lifters = 0;
                var f84p_total_lifters = 0;


                // loop through json array
                for (var i in data) {
                    // get weight class
                    var weightClassValue = data[i].weight_class;
                    var weightClass = weightClassValue.toString();
                    console.log("Weight class = " + weightClass);
                    // get wilks
                    var wilks = parseInt(data[i].wilks);
                    console.log("Wilks = " + wilks);

                    if (weightClass.includes('F_43kg')) {
                        f43_total_wilks += wilks;
                        f43_total_lifters++;
                    }
                    if (weightClass.includes('F_47kg')) {
                        f47_total_wilks += wilks;
                        f47_total_lifters++;
                    }
                    if (weightClass.includes('F_52kg')) {
                        f52_total_wilks += wilks;
                        f52_total_lifters++;
                    }
                    if (weightClass.includes('F_57kg')) {
                        f57_total_wilks += wilks;
                        f57_total_lifters++;
                    }
                    if (f52ghtClass.includes('F_63kg')) {
                        f63_total_wilks += wilks;
                        f63_total_lifters++;
                    }
                    if (weightClass.includes('F_72kg')) {
                        f72_total_wilks += wilks;
                        f72_total_lifters++;
                    }
                    if (weightClass.includes('F_84kg')) {
                        f84_total_wilks += wilks;
                        f84_total_lifters++;
                    }
                    if (weightClass.includes('F_84+kg')) {
                        f84p_total_wilks += wilks;
                        f84p_total_lifters++;
                    }
                }


                var f43_average_wilks = f43_total_wilks / f43_total_lifters;
                var f47_average_wilks = f47_total_wilks / f47_total_lifters;
                var f52_average_wilks = f52_total_wilks / f52_total_lifters;
                var f57_average_wilks = f57_total_wilks / f57_total_lifters;
                var f63_average_wilks = f63_total_wilks / f63_total_lifters;
                var f72_average_wilks = f72_total_wilks / f72_total_lifters;
                var f84_average_wilks = f84_total_wilks / f84_total_lifters;
                var f84p_average_wilks = f84p_total_wilks / f84p_total_lifters;

                female_wilks_per_weight_class.push(f43_average_wilks);
                female_wilks_per_weight_class.push(f47_average_wilks);
                female_wilks_per_weight_class.push(f52_average_wilks);
                female_wilks_per_weight_class.push(f57_average_wilks);
                female_wilks_per_weight_class.push(f63_average_wilks);
                female_wilks_per_weight_class.push(f72_average_wilks);
                female_wilks_per_weight_class.push(f84_average_wilks);
                female_wilks_per_weight_class.push(f84p_average_wilks);


                var chartConfig = myChart.config.data;
                chartConfig.datasets[0].data = female_wilks_per_weight_class;
                chartConfig.datasets[0].label = 'Female Average Wilks per Weight Class';
                chartConfig.labels = female_weight_classes_labels;
                myChart.update();

            });

        },
        error: function(data) {
            console.log(data);
        }
    });
});

// Add remove loading class on body element depending on Ajax request status
$(document).on({
    ajaxStart: function() {
        $("body").addClass("loading");
    },
    ajaxStop: function() {
        $("body").removeClass("loading");
    }
});