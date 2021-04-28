<?php
// If logged in, show admin stats page 
session_start();
if (isset($_SESSION['new_admin'])) {
    header("Location: secure/admin_stats.php");
}
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

    <!-- Table section -->
    <section>
        <div class="container-fluid mytable">
            <table class="table table-dark table-striped table-hover" id="table_id">
                <!-- Coloumn headings -->
                <thead>
                    <tr>
                        <th scope="col">Rank</th>
                        <th scope="col">Lifter</th>
                        <th scope="col">Federation</th>
                        <th scope="col">Date</th>
                        <th scope="col">Location</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Age</th>
                        <th scope="col">Weight class</th>
                        <th scope="col">Squat</th>
                        <th scope="col">Bench</th>
                        <th scope="col">Deaflift</th>
                        <th scope="col">Total</th>
                        <th scope="col">Wilks</th>
                    </tr>
                </thead>
                <!-- Table rows -->
                <tbody id="myTable">
                    <?php include("display/stats_table.php")  ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Footer -->
    <?php include("navigation/footer.php"); ?>

    <!-- jQuery, Popper.js, Bootstrap JS, DataTables -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    <!-- Scroll JS function -->
    <script src="js_functions/navbar_scroll.js"> </script>

    <!-- DataTables Script -->
    <script src="js_functions/datatables_setup.js"> </script>

    <!-- Highlight current page nav link -->
    <script src="js_functions/highlight_nav_link.js"></script>

</body>

</html>