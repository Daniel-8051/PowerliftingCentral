<?php

// API Authentication
if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header("WWW-Authenticate: Basic realm='Private Area'");
    header("HTTP\1.0 401 Unathorized");
    print "Sorry, you need proper credentials";
    exit;
} else {
    // check username & password passed in the http request header
    if (($_SERVER['PHP_AUTH_USER'] == 'admin' and ($_SERVER['PHP_AUTH_PW'] == 'password123'))) {
        /// Headers
        header('Access-Control-Allow-Origin: *'); // can be accessed by anyone
        header('Content-Type: application/json'); // specifies return type
        header('Access-Control-Allow-Methods: POST'); // allows post 
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

        // database connection
        include("../../config/db_conn.php");

        // get raw posted data
        // $data = json_decode(file_get_contents("php://input"));
        $data = json_decode(file_get_contents("php://input"), true);

        // get name
        $name = $data['name'];

        // sex
        $sex = $data['gender'];
        if (strcmp($sex, 'M') === 0) {
            $sex = 1;
        }
        if (strcmp($sex, 'F') === 0) {
            $sex = 2;
        }

        // equipment
        $equipment = 1;

        // age
        $age = $data['age'];

        // AgeClass
        if (isset($age)) {
            if ($age >= 14 and $age <= 18) {
                $ageclass = 1;
            }
            if ($age >= 19 and $age <= 23) {
                $ageclass = 2;
            }
            if ($age >= 24 and $age <= 39) {
                $ageclass = 3;
            }
            if ($age >= 40 and $age <= 49) {
                $ageclass = 4;
            }
            if ($age >= 50 and $age <= 59) {
                $ageclass = 5;
            }
            if ($age >= 60 and $age <= 69) {
                $ageclass = 6;
            }
            if ($age >= 70) {
                $ageclass = 7;
            }
        } else {
            $ageclass = 1;
        }



        // Division
        if ($age >= 14 and $age <= 18) {
            $division = 1;
        }
        if ($age >= 19 and $age <= 23) {
            $division = 2;
        }
        if ($age >= 24 and $age <= 39) {
            $division = 3;
        }
        if ($age >= 40 and $age <= 49) {
            $division = 4;
        }
        if ($age >= 50 and $age <= 59) {
            $division = 5;
        }
        if ($age >= 60 and $age <= 69) {
            $division = 6;
        }
        if ($age >= 70) {
            $division = 7;
        }

        // bodyweightkg
        $bodyweightkg = $data['bodyweight'];

        // WeightClassKg
        // male
        if ($sex === 1 and  ($bodyweightkg <= 53.00)) {
            $weightclasskg = 1;
        }
        if ($sex === 1 and  ($bodyweightkg > 53.00 and $bodyweightkg <= 59.00)) {
            $weightclasskg = 2;
        }
        if ($sex === 1 and  ($bodyweightkg > 59.00 and $bodyweightkg <= 66.00)) {
            $weightclasskg = 3;
        }
        if ($sex === 1 and  ($bodyweightkg > 66.00 and $bodyweightkg <= 74.00)) {
            $weightclasskg = 4;
        }
        if ($sex === 1 and  ($bodyweightkg > 74.00 and $bodyweightkg <= 83.00)) {
            $weightclasskg = 5;
        }
        if ($sex === 1 and  ($bodyweightkg > 83.00 and $bodyweightkg <= 93.00)) {
            $weightclasskg = 6;
        }
        if ($sex === 1 and  ($bodyweightkg > 93.00 and $bodyweightkg <= 105.00)) {
            $weightclasskg = 7;
        }
        if ($sex === 1 and  ($bodyweightkg > 105.00 and $bodyweightkg <= 120.00)) {
            $weightclasskg = 8;
        }
        if ($sex === 1 and  ($bodyweightkg > 120.00)) {
            $weightclasskg = 9;
        }
        // female
        if ($sex === 2 and  ($bodyweightkg <= 43.00)) {
            $weightclasskg = 10;
        }
        if ($sex === 2 and  ($bodyweightkg > 43.00 and $bodyweightkg <= 47.00)) {
            $weightclasskg = 11;
        }
        if ($sex === 2 and  ($bodyweightkg > 47.00 and $bodyweightkg <= 52.00)) {
            $weightclasskg = 12;
        }
        if ($sex === 2 and  ($bodyweightkg > 52.00 and $bodyweightkg <= 57.00)) {
            $weightclasskg = 13;
        }
        if ($sex === 2 and  ($bodyweightkg > 57.00 and $bodyweightkg <= 63.00)) {
            $weightclasskg = 14;
        }
        if ($sex === 2 and  ($bodyweightkg > 63.00 and $bodyweightkg <= 72.00)) {
            $weightclasskg = 15;
        }
        if ($sex === 2 and  ($bodyweightkg > 72.00 and $bodyweightkg <= 84.00)) {
            $weightclasskg = 16;
        }
        if ($sex === 2 and  ($bodyweightkg > 84.00)) {
            $weightclasskg = 17;
        }

        // squat
        $bestsquat = $data['best_squat'];
        if (is_null($bestsquat) or empty($bestsquat)) {
            $bestsquat = 0;
        }

        // bench
        $bestbench = $data['best_bench'];
        if (is_null($bestbench) or empty($bestbench)) {
            $bestbench = 0;
        }

        // deadlift
        $bestdeadlift = $data['best_deadlift'];
        if (is_null($bestdeadlift) or empty($bestdeadlift)) {
            $bestdeadlift = 0;
        }

        // TotalKg
        $totalkg = $bestsquat + $bestbench + $bestdeadlift;

        // Place
        $place = $data['place'];

        // Wilks
        if ($sex == 1) {
            $subCalc1 = 16.2606339 * $bodyweightkg;
            $subCalc2 = -0.002388645 * $bodyweightkg * $bodyweightkg;
            $subCalc3 = -0.00113732 * $bodyweightkg * $bodyweightkg * $bodyweightkg;
            $subCalc4 = 0.00000701863 * $bodyweightkg * $bodyweightkg * $bodyweightkg * $bodyweightkg;
            $subCalc5 = -0.00000001291 *  $bodyweightkg * $bodyweightkg * $bodyweightkg * $bodyweightkg * $bodyweightkg;
            $subCalcSum =  ($subCalc1 + $subCalc2 + $subCalc3 + $subCalc4 + $subCalc5) - 216.0475144;
            $subCalcDiv = 500 / $subCalcSum;
            $wilksresult = $subCalcDiv * $totalkg;
            $wilks =  number_format($wilksresult, 2, ".", "");
        } elseif ($sex == 2) {
            $subCalc1 = -27.23842536447 * $bodyweightkg;
            $subCalc2 = 0.82112226871 * $bodyweightkg * $bodyweightkg;
            $subCalc3 = -0.00930733913 * $bodyweightkg * $bodyweightkg * $bodyweightkg;
            $subCalc4 = 0.00004731582 * $bodyweightkg * $bodyweightkg * $bodyweightkg * $bodyweightkg;
            $subCalc5 = -0.00000009054 * $bodyweightkg * $bodyweightkg * $bodyweightkg * $bodyweightkg * $bodyweightkg;
            $subCalcSum =  ($subCalc1 + $subCalc2 + $subCalc3 + $subCalc4 + $subCalc5) + 594.31747775582;
            $subCalcDiv = 500 / $subCalcSum;
            $wilksresult = $subCalcDiv * $totalkg;
            $wilks =  number_format($wilksresult, 2, ".", "");
        }

        // IPFPoints
        $ipfpoints = 0;

        // Tested
        $tested = "Yes";

        // Country
        $country = $data['country'];
        if (strcmp($country, 'UK') === 0) {
            $country = 1;
        }
        if (strcmp($country, 'Ireland') === 0) {
            $country = 2;
        }
        if (strcmp($country, 'N.Ireland') === 0) {
            $country = 3;
        }
        if (strcmp($country, 'England') === 0) {
            $country = 4;
        }
        if (strcmp($country, 'Scotland') === 0) {
            $country = 5;
        }
        if (strcmp($country, 'Wales') === 0) {
            $country = 6;
        }

        // Federation
        $federation = $data['federation'];
        if (strcmp($federation, 'AAU') === 0) {
            $federation = 1;
        } elseif (strcmp($federation, 'APF') === 0) {
            $federation = 2;
        } elseif (strcmp($federation, 'BAWLA') === 0) {
            $federation = 3;
        } elseif (strcmp($federation, 'BDFPA') === 0) {
            $federation = 4;
        } elseif (strcmp($federation, 'BPU') === 0) {
            $federation = 5;
        } elseif (strcmp($federation, 'BVDK') === 0) {
            $federation = 6;
        } elseif (strcmp($federation, 'CommonwealthPF') === 0) {
            $federation = 7;
        } elseif (strcmp($federation, 'DSF') === 0) {
            $federation = 8;
        } elseif (strcmp($federation, 'EPA') === 0) {
            $federation = 9;
        } elseif (strcmp($federation, 'EPF') === 0) {
            $federation = 10;
        } elseif (strcmp($federation, 'IDFPA') === 0) {
            $federation = 11;
        } elseif (strcmp($federation, 'IDFPF') === 0) {
            $federation = 12;
        } elseif (strcmp($federation, 'IPF') === 0) {
            $federation = 13;
        } elseif (strcmp($federation, 'NASA') === 0) {
            $federation = 14;
        } elseif (strcmp($federation, 'NauruPF') === 0) {
            $federation = 15;
        } elseif (strcmp($federation, 'NZPF') === 0) {
            $federation = 16;
        } elseif (strcmp($federation, 'PA') === 0) {
            $federation = 17;
        } elseif (strcmp($federation, 'RAW') === 0) {
            $federation = 18;
        } elseif (strcmp($federation, 'RAW-CAN') === 0) {
            $federation = 19;
        } elseif (strcmp($federation, 'ScottishPL') === 0) {
            $federation = 20;
        } elseif (strcmp($federation, 'SDFPF') === 0) {
            $federation = 21;
        } elseif (strcmp($federation, 'USAPL') === 0) {
            $federation = 22;
        } elseif (strcmp($federation, 'USPA') === 0) {
            $federation = 23;
        } elseif (strcmp($federation, 'WDFPF') === 0) {
            $federation = 24;
        } elseif (strcmp($federation, 'WelshPA') === 0) {
            $federation = 25;
        } elseif (strcmp($federation, 'WNPF') === 0) {
            $federation = 26;
        } elseif (strcmp($federation, 'WP') === 0) {
            $federation = 27;
        } elseif (strcmp($federation, 'WPC') === 0) {
            $federation = 28;
        } elseif (strcmp($federation, 'WP-NZ') === 0) {
            $federation = 29;
        } else {
            $federation = 34;
        }

        // Date
        $date = $data['date'];
        $dateFormatted = date('Y-m-d', strtotime($date));

        // MeetCountry
        $meetcountry = $data['meet_country'];
        if (strcmp($meetcountry, 'Australia') === 0) {
            $meetcountry = 1;
        }
        if (strcmp($meetcountry, 'Belarus') === 0) {
            $meetcountry = 2;
        }
        if (strcmp($meetcountry, 'Canada') === 0) {
            $meetcountry = 3;
        }
        if (strcmp($meetcountry, 'China') === 0) {
            $meetcountry = 4;
        }
        if (strcmp($meetcountry, 'Czechia') === 0) {
            $meetcountry = 5;
        }
        if (strcmp($meetcountry, 'Denmark') === 0) {
            $meetcountry = 6;
        }
        if (strcmp($meetcountry, 'England') === 0) {
            $meetcountry = 7;
        }
        if (strcmp($meetcountry, 'Estonia') === 0) {
            $meetcountry = 8;
        }
        if (strcmp($meetcountry, 'Finland') === 0) {
            $meetcountry = 9;
        }
        if (strcmp($meetcountry, 'Germany') === 0) {
            $meetcountry = 10;
        }
        if (strcmp($meetcountry, 'Hungary') === 0) {
            $meetcountry = 11;
        }
        if (strcmp($meetcountry, 'Ireland') === 0) {
            $meetcountry = 12;
        }
        if (strcmp($meetcountry, 'Italy') === 0) {
            $meetcountry = 13;
        }
        if (strcmp($meetcountry, 'Lithuania') === 0) {
            $meetcountry = 14;
        }
        if (strcmp($meetcountry, 'Luxembourg') === 0) {
            $meetcountry = 15;
        }
        if (strcmp($meetcountry, 'Nauru') === 0) {
            $meetcountry = 16;
        }
        if (strcmp($meetcountry, 'New Zealand') === 0) {
            $meetcountry = 17;
        }
        if (strcmp($meetcountry, 'Norway') === 0) {
            $meetcountry = 18;
        }
        if (strcmp($meetcountry, 'Russia') === 0) {
            $meetcountry = 19;
        }
        if (strcmp($meetcountry, 'Scotland') === 0) {
            $meetcountry = 20;
        }
        if (strcmp($meetcountry, 'South Africa') === 0) {
            $meetcountry = 21;
        }
        if (strcmp($meetcountry, 'Spain') === 0) {
            $meetcountry = 22;
        }
        if (strcmp($meetcountry, 'Sweden') === 0) {
            $meetcountry = 23;
        }
        if (strcmp($meetcountry, 'Switzerland') === 0) {
            $meetcountry = 24;
        }
        if (strcmp($meetcountry, 'UK') === 0) {
            $meetcountry = 25;
        }
        if (strcmp($meetcountry, 'USA') === 0) {
            $meetcountry = 26;
        }
        if (strcmp($meetcountry, 'Wales') === 0) {
            $meetcountry = 27;
        }

        // MeetName
        $meetname = $data['meet_name'];

        // SQL query
        $insert = "INSERT INTO uk_ireland_powerlifting (name, sex, equipment, age, age_class, division, bodyweight, weight_class, 
    best_squat, best_bench, best_deadlift, total, place, wilks, ipf_points, tested, country, federation, date, meet_country, meet_name) 
    VALUES ('{$name}', '{$sex}', '{$equipment}', '{$age}', '{$ageclass}', '{$division}', '{$bodyweightkg}', '{$weightclasskg}'
    , '{$bestsquat}', '{$bestbench}', '{$bestdeadlift}', '{$totalkg}', '{$place}', '{$wilks}', '{$ipfpoints}', '{$tested}'
    , '{$country}', '{$federation}', '{$dateFormatted}', '{$meetcountry}', '{$meetname}')";

        // run query on DB
        $result = $conn->query($insert);

        if (!$result) {
            echo json_encode(
                array('message' => 'Lifter not added')
            );
            die();
        } else {
            echo json_encode(
                array('message' => 'Lifter added')
            );
        }
    } else {
        header("WWW-Authenticate: Basic realm='Private Area'");
        header("HTTP/1.0 401 Unathorized");
        print "Sorry, you need proper credentials";
    }
}
