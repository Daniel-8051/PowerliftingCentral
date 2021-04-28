<?php
session_start();
include("security/check_login_status.php");

// drop down form options
include("display/add_drop_down_options.php");

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
    include("navigation/header_image_text.php");
    print_header_image_text("ADD LIFTER");
    ?>

    <!-- Add lifter form -->
    <div class="container">
        <div class="d-flex justify-content-center h-100">

            <div class="addliftercard">
                <!-- Card header -->
                <div class="my-card-header">
                    <h3>ADD LIFTER ENTRY</h3>
                </div>

                <div class="card-body add-lifter-card">
                    <form method="POST">
                        <div class="row">
                            <div class="col-sm">
                                <!-- Lifter name -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span>
                                            <ion-icon class="my-icon" name="person-circle-outline"></ion-icon>
                                        </span>
                                    </div>
                                    <input name="name" type="text" required="required" value="" class="form-control" placeholder="Litfer name">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Lifter country -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span>
                                            <ion-icon class="my-icon" name="earth"></ion-icon>
                                        </span>
                                    </div>
                                    <select name="country" class="custom-select">
                                        <option selected>Lifter country</option>
                                        <option value="UK">UK</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="N.Ireland">N. Ireland</option>
                                        <option value="England">England</option>
                                        <option value="Scotland">Scotland</option>
                                        <option value="Wales">Wales</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Gender -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span>
                                            <ion-icon class='my-icon' name="male-female"></ion-icon>
                                        </span>
                                    </div>
                                    <select name="gender" class="custom-select">
                                        <option selected>Gender</option>
                                        <option value="M">Male</option>
                                        <option value="F">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Age -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><ion-icon class='my-icon' name="arrow-forward-circle"></ion-icon></span>
                                    </div>
                                    <input name="age" type="number" min="14" max="100" required="required" class="form-control" placeholder="Age">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Bodyweight -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><ion-icon class='my-icon' name="speedometer"></ion-icon></span>
                                    </div>
                                    <input name="bodyweight" type="number" step="0.1" required="required" value="" class="form-control" placeholder="Bodyweight">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Squat -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><img class='my-icon-img' src="https://img.icons8.com/ios-filled/100/000000/squats.png"/></span>
                                    </div>
                                    <input name="best_squat" type="number" required="required" value="" class="form-control" placeholder="Squat">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Bench -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><img class='my-icon-img' src="https://img.icons8.com/metro/26/000000/bench-press.png"/></span>
                                    </div>
                                    <input name="best_bench" type="number" required="required" value="" class="form-control" placeholder="Bench">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Deadlift -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><img class='my-icon-img' src="https://img.icons8.com/ios-filled/50/000000/deadlift.png"/></span>
                                    </div>
                                    <input name="best_deadlift" type="number" required="required" value="" class="form-control" placeholder="Deadlift">
                                </div>
                            </div>
                        </div>

                        <!-- Date -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span>
                                    <ion-icon class='my-icon' name="calendar-number"></ion-icon>
                                </span>
                            </div>
                            <input name="date" type="date" required="required" value="" class="form-control" placeholder="Competition date">
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Place -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span>
                                            <ion-icon class='my-icon' name="trophy"></ion-icon>
                                        </span>
                                    </div>
                                    <input name="place" type="text" required="required" value="" class="form-control" placeholder="Place">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Federation -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><ion-icon class='my-icon' name="information-circle"></ion-icon></span>
                                    </div>
                                    <select name="federation" class="custom-select">
                                        <option selected>Federation</option>
                                        <?php
                                        if (!$federation_query_result) {
                                            echo $conn->error;
                                            // $num = 1;
                                        } else {
                                            while ($row = $federation_query_result->fetch_assoc()) {
                                                echo "<option value='{$row['federation_name']}'>{$row['federation_name']}</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- Competition Name -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span><ion-icon class='my-icon' name="business"></ion-icon></span>
                            </div>
                            <input name="meet_name" type="text" required="required" value="" class="form-control" placeholder="Competition name">
                        </div>
                        <!-- Competition country -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span><ion-icon class='my-icon' name="location"></ion-icon></span>
                            </div>
                            <select name="meet_country" class="custom-select">
                                <option selected>Competition country</option>
                                <?php
                                if (!$meet_country_query_result) {
                                    echo $conn->error;
                                    // $num = 1;
                                } else {
                                    while ($row = $meet_country_query_result->fetch_assoc()) {
                                        echo "<option value='{$row['meet_country_name']}'>{$row['meet_country_name']}</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <!-- Submit -->
                        <div class="form-group">
                            <button type="submit" value="Submit" class="btn float-right login_btn">Submit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <div class="results">
        <h2></h2>
        <pre></pre>
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
    <script src="../js_functions/navbar_scroll.js"></script>

    <!-- Turn form data to JSON & send to endpoint -->
    <script src="js_functions/handle_add_lifter_form.js"></script>

</body>

</html>