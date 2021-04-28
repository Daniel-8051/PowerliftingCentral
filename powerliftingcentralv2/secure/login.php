<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,700" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap v4 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../styles/app.css">

    <title>PowerliftingCentral</title>
</head>

<body>

    <!-- Navbar -->
    <?php 
        include("navigation/navbar.php");
    ?>

    <!-- Header section w/ image -->
    <?php 
        include("navigation/header_image_text.php") ;
        print_header_image_text("LOGIN");
    ?>
    

    <!-- Login form -->
    <div class="container">
        <div class="d-flex justify-content-center h-100">

            <div class="logincard">
                <!-- Card header -->
                <div class="my-card-header">
                    <h3>Sign In</h3>
                </div>

                <div class="card-body">
                    <form action="sign.php" method="POST">
                        <!-- Username -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span><ion-icon class="my-icon" name="person-circle-outline"></ion-icon></span>
                            </div>
                            <input name="userfield" type="text" required="required" value="" class="form-control" placeholder="username">
                        </div>
                        <!-- Password -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span><ion-icon  class="my-icon" name="lock-closed"></ion-icon></span>
                            </div>
                            <input name="passfield" type="password" required="required" class="form-control" placeholder="password">
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>
                    </form>
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
    <!-- Ionicons -->
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>

    <!-- Scroll JS function -->
    <script src="../js_functions/navbar_scroll.js" ></script>

</body>

</html>