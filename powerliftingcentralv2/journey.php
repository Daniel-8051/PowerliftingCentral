<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap v4 CSS -->
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
    print_header_image_text("MY JOURNEY");
    ?>

    <!-- Journey Content -->
    <div class="container-fluid">
        <div class="row align-items-center content">
            <div class="col-md-6 text-center">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-10 blurb mb-5 mb-md-0">
                        <p class="lead">My journey within the sport of powerlifting began in 2014 when I was 18 years old.
                            Over the next 5 years I would go on to compete over 9 times, ranging from
                            Irish Nationals 2017 to British Uni Championships 2018 as part of the powerlifting temm
                            at Loughborough University. In the beginning, I was using strength training as a means of
                            improving my performance in the sport of boxing and to generally get bigger and stronger,
                            as many young men at that age do. I eventually decided that sign up for a local
                            powerlifting gym and had my first competition with 6 months. Powerlifting has
                            taught me many lessons that I still apply to this day in other areas of my life with
                            regards to discipline, consistency and hard work. </p>
                    </div>
                </div>
            </div>
            <!-- Image Carousel -->
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="https://i.ibb.co/KzpY1DC/IMG-0393.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/nzyrY8f/IMG-0394.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="https://i.ibb.co/0qY4VRF/IMG-0396.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- Graph & Text -->
        <div class="row align-items-center content">
            <!-- Graph -->
            <div class="col-md-6 order-2 order-md-1">
                <canvas id="myJourneyChart"></canvas>
            </div>
            <!-- Text -->
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-3">
                        <span class="fw-bold " id="journey-graph-header">PROGRESS</span>
                        <img src="https://i.ibb.co/XS4CKJZ/graphicon.png" alt="" class="d-none d-lg-inline mb-3">
                        <p class="lead">My progress in all 3 lifts has seen a steady improvement over the years. Different
                        competitions bring different stresses and all present their own challenges. Attempt selection during
                        the day can play a big role in the end result. The first year or so, without the guidance of a coach, my 
                        attempt selection was not optimal, as is reflective of the dip in performance on some lifts but after 
                        obtaining a coach, progress saw a small, steady, linear progression.  </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Footer -->
    <?php include("navigation/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Scroll JS function -->
    <script src="js_functions/navbar_scroll.js"> </script>

    <!-- Graph content -->
    <script src="js_functions/journey_charts.js"></script>

    <!-- Highlight current page nav link -->
    <script src="js_functions/highlight_nav_link.js"></script>

</body>

</html>