<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap v4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

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
    print_header_image_text("ABOUT POWERLIFTING");
    ?>

    <section class="container-fluid px-3">
        <div class="row align-items-center content">

            <div class="col mx-auto">
                <p class="lead text-light text-center">What is powerlifting? Powerlifting is a strength sport consisting of three events: squat, bench press and the deadlift. 
                The lifter gets three attempts at a 1 rep max for each lift (a 1 rep max is the heaviest weight you can lift in a single attempt). 
                They add together your most successful attempt for each lift and that is your total score. The person with the highest total score in their weight class wins. 
                Weight classes can range anywhere from 53kg to 120+kg for men and from 43kg to 84+kg for women.<br>
                This website intends to show information and statistics of raw powerlifting within the UK and Ireland.
                </p>
            </div>

        </div>
    </section>

    <!-- Homepage content -->
    <div class="container-fluid">
        <!-- Squat content -->
        <section class="container-fluid px-0">
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://i.ibb.co/B41Trzf/squat.jpg" class="img-fluid" />
                </div>
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2 class="fw-bold">SQUAT</h2>
                            <img src="https://i.ibb.co/CzWGGpc/squat-icon.png" class="d-none d-lg-inline">
                            <p class="lead">The lift starts with the lifter standing erect and the bar loaded with weights resting on the lifter's shoulders. At the referee's command the lift begins. The lifter creates a break in the hips, bends their knees and drops into a squatting position with the hip crease (the top surface of the leg at the hip crease) below the top of the knee. The lifter then returns to an erect position. At the referee's command the bar is returned to the rack and the lift is completed.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Benchpress content -->
            <div class="row align-items-center content">
                <div class="col-md-6 text-center">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-0">
                            <h2 class="fw-bold">BENCH PRESS</h2>
                            <img src="https://i.ibb.co/TkgYCLM/bench-icon.png" alt="" class="d-none d-lg-inline">
                            <p class="lead">With his or her back resting on the bench, the lifter takes the loaded bar at arm's length. The lifter lowers the bar to the chest. When the bar becomes motionless on the chest, the referee gives a press command. Then the referee will call 'Rack' and the lift is completed as the weight is returned to the rack.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://i.ibb.co/FByLQ0C/bench.jpg" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
            <!-- Deadlift content -->
            <div class="row align-items-center content">
                <div class="col-md-6 order-2 order-md-1">
                    <img src="https://i.ibb.co/0KfgRn8/deadlift.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 text-center order-1 order-md-2">
                    <div class="row justify-content-center">
                        <div class="col-10 col-lg-8 blurb mb-5 mb-md-3">
                            <h2 class="fw-bold">DEADLIFT</h2>
                            <img src="https://i.ibb.co/MgBG9XN/deadlift-icon.png" alt="" class="d-none d-lg-inline">
                            <p class="lead">In the deadlift the athlete grasps the loaded bar which is resting on the platform floor. The lifter pulls the weights off the floor and assumes an erect position. The knees must be locked and the shoulders back, with the weight held in the lifter's grip. At the referee's command the bar will be returned to the floor under the control of the lifter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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

    <!-- Highlight current page nav link -->
    <script src="js_functions/highlight_nav_link.js"></script>

</body>

</html>