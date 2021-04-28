<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles/app.css">

    <title>PowerliftingCentral</title>
</head>

<body>

    <!-- Navbar -->
    <?php include("navigation/navbar.php"); ?>

    <!-- Header section w/ image -->
    <?php
    include("navigation/header_image_text.php");
    print_header_image_text("TRENDS");
    ?>

    <!-- Graph section -->
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="overlay"></div>
            </div>

            <div class="row">
                <div class="col-1">

                </div>
                <!-- Actual graph canvas -->
                <div class="col-sm-10 mygraph">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-1">

                </div>
            </div>

            <!-- Buttons to switch between graphs -->
            <div class="row">
                <div class="col-8 mx-auto mt-2 mb-2 text-center">
                    <button id="0" type="button" class='btn btn-light btn-sm m-2'>Participation</button>
                    <button id="1" type="button" class='btn btn-light btn-sm m-2'>Wilks (Male vs Female)</button>
                    <button id="2" type="button" class='btn btn-light btn-sm m-2'>Male Wilks (by weight class)</button>
                    <button id="3" type="button" class='btn btn-light btn-sm m-2'>Female Wilks (by weight class)</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Graph explanation -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col text-light text-center">
                    <p id="graph_explanation"></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include("navigation/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Scroll JS function -->
    <script src="js_functions/navbar_scroll.js"> </script>

    <!-- Chart.js -->
    <script src="js_functions/trends_charts.js"> </script>

    <!-- Chart.js text-->
    <script src="js_functions/trends_charts_text.js"></script>

    <!-- Highlight current page nav link -->
    <script src="js_functions/highlight_nav_link.js"></script>

    <script>
        
    </script>

</body>

</html>