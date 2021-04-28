<?php
// API Authentication
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm='Private Area'");
    header("HTTP\1.0 401 Unathorized");
    print "Sorry, you need proper credentials";
    exit;
} else {
    if (($_SERVER['PHP_AUTH_USER'] == 'admin' and ($_SERVER['PHP_AUTH_PW'] == 'password123'))) {
        /// Headers
        header('Access-Control-Allow-Origin: *'); // can be accessed by anyone
        header('Content-Type: application/json');

        // database connection
        include("../../../config/db_conn.php");

        // get name
        $name = isset($_GET['name']) ? $_GET['name'] : die();

        // order by paramter
        $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : die();

        // sql query
        $sql = "SELECT * FROM uk_ireland_powerlifting 
        INNER JOIN uk_ireland_powerlifting_countries
        ON uk_ireland_powerlifting.country = uk_ireland_powerlifting_countries.id
        INNER JOIN uk_ireland_powerlifting_federation
        ON uk_ireland_powerlifting.federation = uk_ireland_powerlifting_federation.id
        INNER JOIN uk_ireland_powerlifting_meetcountries
        ON uk_ireland_powerlifting.meet_country = uk_ireland_powerlifting_meetcountries.id
        INNER JOIN uk_ireland_powerlifting_gender
        ON uk_ireland_powerlifting.sex = uk_ireland_powerlifting_gender.id
        INNER JOIN uk_ireland_powerlifting_weight_class
        ON uk_ireland_powerlifting.weight_class = uk_ireland_powerlifting_weight_class.id
        INNER JOIN uk_ireland_powerlifting_equipment
        ON uk_ireland_powerlifting.equipment = uk_ireland_powerlifting_equipment.id
        INNER JOIN uk_ireland_powerlifting_age_classes
        ON uk_ireland_powerlifting.age_class = uk_ireland_powerlifting_age_classes.id
        INNER JOIN uk_ireland_powerlifting_division
        ON uk_ireland_powerlifting.division = uk_ireland_powerlifting_division.id
        WHERE name='$name'
        ORDER BY $orderby";


        // run query on db
        $result = mysqli_query($conn, $sql);

        // get row count 
        $rowCount = mysqli_num_rows($result);

        // check if any lifters
        if ($rowCount > 0) {
            // lifter array
            $lifters_arr = array();
            // $lifters_arr['data'] = array(); // where the actual data goes

            // loop through query result
            while ($row = $result->fetch_assoc()) {
                extract($row); // gets access to column names

                // create lifter item for each lifter
                $lifter_item = array(
                    'lifter_id' => $lifter_id,
                    'name' => $name,
                    'gender' => $gender,
                    'equipment' => $equipment_name,
                    'age' => $age,
                    'age_class' => $age_class_name,
                    'division' => $division_name,
                    'bodyweight' => $bodyweight,
                    'weight_class' => $weight_class_name,
                    'best_squat' => $best_squat,
                    'best_bench' => $best_bench,
                    'best_deadlift' => $best_deadlift,
                    'total' => $total,
                    'place' => $place,
                    'wilks' => $wilks,
                    'ipf_points' => $ipf_points,
                    'tested' => $tested,
                    'country_name' => $country_name,
                    'federation' => $federation_name,
                    'date' => $date,
                    'meet_country_name' => $meet_country_name,
                    'meet_name' => $meet_name
                );

                // push to "data"
                // array_push($lifters_arr['data'], $lifter_item);
                array_push($lifters_arr, $lifter_item);
            }

            // turn to JSON & output
            echo json_encode($lifters_arr);
        } else {
            // no lifters
            echo json_encode(
                array('message' => 'No lifters found')
            );
        }
    } else {
        header("WWW-Authenticate: Basic realm='Private Area'");
        header("HTTP/1.0 401 Unathorized");
        print "Sorry, you need proper credentials";
    }
}
