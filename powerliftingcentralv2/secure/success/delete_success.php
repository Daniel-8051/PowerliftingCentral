<?php
// Check login status
session_start();
include("../security/check_login_status.php");

// HTTP DELETE REQUEST TO API - using CURL
$lifter_id = $_GET['lifter_id'];

// initialise curl
$ch = curl_init();

curl_setopt_array($ch, array(
    CURLOPT_URL => "http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/api/lifter/delete.php?lifter_id=$lifter_id", //The URL to fetch. This can also be set when initializing a session with curl_init().
    CURLOPT_USERPWD => 'admin:password123', //	A username and password formatted as "[username]:[password]" to use for the connection.
    CURLOPT_CUSTOMREQUEST => 'DELETE'
));

if(curl_exec($ch)){
    $delete_message = "Lifter successfully deleted";
} else{
    $delete_message = "Problem with deleting lifter";
}

curl_close($ch); // close curl resource
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

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../../styles/app.css">

    <title>PowerliftingCentral</title>
</head>

<body>

    <!-- Navbar -->
    <?php
    include("../navigation/success_navbar.php");
    ?>

    <!-- Header section w/ image -->
    <?php
    include("../navigation/header_image_text.php");
    print_header_image_text("DELETE SUCCESSFUL");
    ?>

    <!-- Lifter successfully deleted -->
    <section class="container-fluid px-3">
        <div class="row align-items-center content">

            <div class="col mx-auto">
                <h1><?php echo $delete_message ?></h1>
                <a href='../admin_stats.php'>View lifter stats</a>
            </div>

        </div>
    </section>


   <!-- Footer -->
   <?php include("../navigation/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- Scroll JS function -->
    <script src="../js_functions/navbar_scroll.js"></script>

    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

</body>

</html>