<?php
session_start();
include("config/db_conn.php");
// Process country code to pass to flag API
include("php_functions/lifter_country_code_flag_api.php");
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.24/datatables.min.css" />

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
    print_header_image_text("STATS");
    ?>

    <!-- Graph & Text -->
    <div class="container-fluid">
        <div class="row align-items-center content">

            <!-- Graph -->
            <div class="col-md-6 order-2 order-md-1 text-center">
                <canvas id="lifter_chart"></canvas>
                <button id="0" type="button" class='btn btn-light btn-sm m-2'>SQ, BN, DL</button>
                <button id="1" type="button" class='btn btn-light btn-sm m-2'>Total</button>
            </div>

            <!-- Text -->
            <div class="col-md-6 text-center order-1 order-md-2">
                <div class="row justify-content-center">
                    <div class="col-10 col-lg-8 blurb mb-5 mb-md-3">
                        <span class="fw-bold " id="journey-graph-header">
                            <?php
                            $liftername = $_GET["info"];
                            echo "$liftername"
                            ?>
                        </span>
                        <!-- Lifter flag -->
                        <!-- https://flagpedia.net/download/api -->
                        <img src="https://flagcdn.com/60x45/<?php echo "$country_code" ?>" 
                        srcset="https://flagcdn.com/120x90/<?php echo "$country_code" ?> 2x,
                        https://flagcdn.com/180x135/<?php echo "$country_code" ?> 3x" 
                        width="60" height="45" 
                        alt="<?php echo "$lifter_country" ?>">

                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cum iste, suscipit quia dolores, provident nobis, exercitationem aliquid error labore laboriosam laudantium placeat! Quae quidem vero adipisci magni a facere aperiam.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- Table showing specific lifter results -->
    <section>
        <div class="container-fluid mytable">
            <table class="table table-dark table-striped table-hover" id="table_id">
                <!-- Coloumn headings -->
                <thead>
                    <tr>
                        <th scope="col">Place</th>
                        <th scope="col">Federation</th>
                        <th scope="col">Date</th>
                        <th scope="col">Location</th>
                        <th scope="col">Competiton</th>
                        <th scope="col">Division</th>
                        <th scope="col">Age</th>
                        <th scope="col">Weight class</th>
                        <th scope="col">Squat</th>
                        <th scope="col">Bench</th>
                        <th scope="col">Deaflift</th>
                        <th scope="col">Total</th>
                        <th scope="col">Wilks</th>
                    </tr>
                </thead>
                <!-- Table rows (will use PHP to populate rows) -->
                <tbody id="myTable">
                    <?php include("display/lifter_table.php") ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Footer -->
    <?php include("navigation/footer.php"); ?>

    <!-- jQuery, Popper.js, Bootstrap JS, DataTables -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- Scroll JS function -->
    <script src="js_functions/navbar_scroll.js"> </script>

    <!-- DataTables Script -->
    <script src="js_functions/datatables_setup.js"> </script>

    <!-- Chart.js -->
    <script src="js_functions/lifter_chart.js"> </script>

    <!-- Highlight current page nav link -->
    <script src="js_functions/highlight_nav_link.js"></script>

</body>

</html>