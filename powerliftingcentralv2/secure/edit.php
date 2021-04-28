<?php
session_start();
include("security/check_login_status.php");

// info to populate form
include("display/admin_edit_form_info.php");

// drop down options for edit form
include("display/edit_drop_down_options.php");

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
    print_header_image_text("EDIT LIFTER");
    ?>

    <!-- Add lifter form -->
    <div class="container">
        <div class="d-flex justify-content-center h-100">

            <div class="addliftercard">
                <!-- Card header -->
                <div class="my-card-header">
                    <h3>EDIT LIFTER DETAILS</h3>
                </div>

                <div class="card-body edit-lifter-card">
                    <form method="PUT">
                        <div class="row">
                            <div class="col-sm">
                                <!-- Lifter name -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><ion-icon class="my-icon" name="person-circle-outline"></ion-icon></span>
                                    </div>
                                    <input name="name" title="Lifter name" type="text" required="required" value='<?php echo "{$name}" ?>' class="form-control show-input-title">
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
                                    <select title="Lifter country" name="country_name" class="custom-select show-input-title">
                                        <option selected value="<?php echo "{$country_name}" ?>"><?php echo "{$country_name}" ?></option>
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
                                    <select title="Gender" name="gender" class="custom-select show-input-title">
                                        <option value="<?php echo "{$gender}" ?>"> <?php echo "{$gender}" ?> </option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Age -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span>
                                            <ion-icon class='my-icon' name="arrow-forward-circle"></ion-icon>
                                        </span>
                                    </div>
                                    <input name="age" title="Age" type="number" min="14" max="100" required="required" value='<?php echo "{$age}" ?>' class="form-control show-input-title">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Bodyweight -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span>
                                            <ion-icon class='my-icon' name="speedometer"></ion-icon>
                                        </span>
                                    </div>
                                    <input name="bodyweight" title="Bodyweight" type="number" step="0.1" required="required" value='<?php echo "{$bodyweight}" ?>' class="form-control show-input-title">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <!-- Squat -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><img class='my-icon-img' src="https://img.icons8.com/ios-filled/100/000000/squats.png" /></span>
                                    </div>
                                    <input name="best_squat" title="Squat" type="number" required="required" value='<?php echo "{$best_squat}" ?>' class="form-control show-input-title">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Bench -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><img class='my-icon-img' src="https://img.icons8.com/metro/26/000000/bench-press.png" /></span>
                                    </div>
                                    <input name="best_bench" title="Bench" type="number" required="required" value='<?php echo "{$best_bench}" ?>' class="form-control show-input-title">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Deadlift -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span><img class='my-icon-img' src="https://img.icons8.com/ios-filled/50/000000/deadlift.png" /></span>
                                    </div>
                                    <input name="best_deadlift" title="Deadlift" type="number" required="required" value='<?php echo "{$best_deadlift}" ?>' class="form-control show-input-title">
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
                            <input name="date" title="Date of competition" type="text" onfocus="(this.type='date')" required="required" value='<?php echo "$date_formatted"; ?>' class="form-control show-input-title">
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
                                    <input name="place" title="Lifter place" type="text" required="required" value='<?php echo "{$place}" ?>' class="form-control show-input-title">
                                </div>
                            </div>
                            <div class="col-sm">
                                <!-- Federation -->
                                <div class="input-group form-group">
                                    <div class="input-group-prepend">
                                        <span>
                                            <ion-icon class='my-icon' name="information-circle"></ion-icon>
                                        </span>
                                    </div>
                                    <select name="federation" title="Federation" class="custom-select show-input-title">
                                        <option selected value="<?php echo "$federation" ?>"><?php echo "{$federation}" ?></option>
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
                                <span>
                                    <ion-icon class='my-icon' name="business"></ion-icon>
                                </span>
                            </div>
                            <input name="meet_name" type="text" title="Competition name" required="required" value='<?php echo "{$meet_name}" ?>' class="form-control show-input-title">
                        </div>
                        <!-- Competition country -->
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span>
                                    <ion-icon class='my-icon' name="location"></ion-icon>
                                </span>
                            </div>
                            <select name="meet_country_name" title="Competition country" class="custom-select show-input-title">
                                <option selected value="<?php echo "$meet_country_name" ?>"><?php echo "{$meet_country_name}" ?></option>
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
                        <!-- Edit ID -->
                        <input type='hidden' value='<?php echo $lifter_id ?>' name='lifter_id'>
                        <!-- Submit -->
                        <div class="form-group">
                            <button type="submit" class="btn float-right login_btn">Make Chages</button>
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
    <script src="js_functions/handle_edit_lifter_form.js"></script>

</body>

</html>