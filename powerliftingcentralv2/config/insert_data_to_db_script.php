<?php

include("db_conn.php");

$file = "../uk_ireland_powerlifting_dataset.csv";

if (file_exists($file)) {

    $filepath = fopen($file, "r");

    while (($line = fgetcsv($filepath)) !== FALSE) {

        // Name	- remove " ' " from names
        $name = $line[0];
        $apostrophePositionName = (strpos($name, "'"));
        $name = substr_replace($name, "", $apostrophePositionName, $apostrophePositionName);

        // Sex
        $sex = $line[1];
        if (strcmp($sex, 'M') === 0) {
            $sex = 1;
        }
        if (strcmp($sex, 'F') === 0) {
            $sex = 2;
        }

        // Equipment
        $equipment = $line[2];
        if(strcmp($equipment, 'Raw') == 0){
            $equipment = 1;
        }

        // Age
        $age = $line[3];
        $age = ceil($age);
        if ($age == 0) {
            $age = rand(16, 70);
        }

        // AgeClass
        if($age>=14 and $age<=18){
            $ageclass = 1;
        } 
        if($age>=19 and $age<=23){
            $ageclass = 2;
        }
        if($age>=24 and $age<=39){
            $ageclass = 3;
        }
        if($age>=40 and $age<=49){
            $ageclass = 4;
        }
        if($age>=50 and $age<=59){
            $ageclass = 5;
        }
        if($age>=60 and $age<=69){
            $ageclass = 6;
        }
        if($age>=70){
            $ageclass = 7;
        }

        // Division
        if($age>=14 and $age<=18){
            $division = 1;
        } 
        if($age>=19 and $age<=23){
            $division = 2;
        }
        if($age>=24 and $age<=39){
            $division = 3;
        }
        if($age>=40 and $age<=49){
            $division = 4;
        }
        if($age>=50 and $age<=59){
            $division = 5;
        }
        if($age>=60 and $age<=69){
            $division = 6;
        }
        if($age>=70){
            $division = 7;
        }

        // BodyweightKg
        $bodyweightkg = $line[6];

        // WeightClassKg
        // male
        if ($sex == 1 and  ($bodyweightkg<=53.0)){
            $weightclasskg= 1;
        }
        if ($sex == 1 and  ($bodyweightkg>53.0 and $bodyweightkg<=59.0)){
            $weightclasskg= 2;
        }
        if ($sex == 1 and  ($bodyweightkg>59.0 and $bodyweightkg<=66.0)){
            $weightclasskg= 3;
        }
        if ($sex == 1 and  ($bodyweightkg>66.0 and $bodyweightkg<=74.0)){
            $weightclasskg= 4;
        }
        if ($sex == 1 and  ($bodyweightkg>74.0 and $bodyweightkg<=83.0)){
            $weightclasskg= 5;
        }
        if ($sex == 1 and  ($bodyweightkg>83.0 and $bodyweightkg<=93.0)){
            $weightclasskg= 6;
        }
        if ($sex == 1 and  ($bodyweightkg>93.0 and $bodyweightkg<=105.0)){
            $weightclasskg= 7;
        }
        if ($sex == 1 and  ($bodyweightkg>105.0 and $bodyweightkg<=120.0)){
            $weightclasskg= 8;
        }
        if ($sex == 1 and  ($bodyweightkg>120.0)){
            $weightclasskg= 9;
        }
        // female
        if ($sex == 2 and  ($bodyweightkg<=43.0)){
            $weightclasskg= 10;
        }
        if ($sex == 2 and  ($bodyweightkg>43.0 and $bodyweightkg<=47.0)){
            $weightclasskg= 11;
        }
        if ($sex == 2 and  ($bodyweightkg>47.0 and $bodyweightkg<=52.0)){
            $weightclasskg= 12;
        }
        if ($sex == 2 and  ($bodyweightkg>52.0 and $bodyweightkg<=57.0)){
            $weightclasskg= 13;
        }
        if ($sex == 2 and  ($bodyweightkg>57.0 and $bodyweightkg<=63.0)){
            $weightclasskg= 14;
        }
        if ($sex == 2 and  ($bodyweightkg>63.0 and $bodyweightkg<=72.0)){
            $weightclasskg= 15;
        }
        if ($sex == 2 and  ($bodyweightkg>72.0 and $bodyweightkg<=84.0)){
            $weightclasskg= 16;
        }
        if ($sex == 2 and  ($bodyweightkg>84.0)){
            $weightclasskg= 17;
        }


        // Best3SquatKg	
        $bestsquat = $line[8];
        if (is_null($bestsquat) or empty($bestsquat)) {
            $bestsquat = 0;
        }

        // Best3BenchKg	
        $bestbench = $line[9];
        if (is_null($bestbench) or empty($bestbench)) {
            $bestbench = 0;
        }

        // Best3DeadliftKg	
        $bestdeadlift = $line[10];
        if (is_null($bestdeadlift) or empty($bestdeadlift)) {
            $bestdeadlift = 0;
        }

        // TotalKg	
        $totalkg = $line[11];
        if (is_null($totalkg) or empty($totalkg)) {
            $totalkg = 0;
        }

        // Place
        $place = $line[12];

        // Wilks
        $wilks = $line[13];
        if (is_null($wilks) or empty($wilks)) {
            $wilks = 0;
        }

        // IPFPoints
        $ipfpoints = $line[14];
        if (is_null($ipfpoints) or empty($ipfpoints)) {
            $ipfpoints = 0;
        }

        // Tested	
        $tested = $line[15];

        // Country
        $country = $line[16];
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
        $federation = $line[17];
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
        } else  {
            $federation = 34;
        } 

        // Date	
        $date = $line[18];
        $date = date_create_from_format('j/m/Y', $date);
        $dateFormatted = date_format($date, 'Y-m-d'); 
        // $dateFormatted = date('Y-m-d', strtotime($date, "\n"));

        // MeetCountry
        $meetcountry = $line[19];
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
        $meetname = $line[20];
        $apostrophePositionMeetName = (strpos($meetname, "'"));
        $meetname = substr_replace($meetname, " ", $apostrophePositionMeetName, $apostrophePositionMeetName);


        $insert = "INSERT INTO uk_ireland_powerlifting (name, sex, equipment, age, age_class, division, bodyweight, weight_class, 
        best_squat, best_bench, best_deadlift, total, place, wilks, ipf_points, tested, country, federation, date, meet_country, meet_name) 
        VALUES ('{$name}', '{$sex}', '{$equipment}', '{$age}', '{$ageclass}', '{$division}', '{$bodyweightkg}', '{$weightclasskg}'
        , '{$bestsquat}', '{$bestbench}', '{$bestdeadlift}', '{$totalkg}', '{$place}', '{$wilks}', '{$ipfpoints}', '{$tested}'
        , '{$country}', '{$federation}', '{$dateFormatted}', '{$meetcountry}', '{$meetname}')";


        $result = $conn->query($insert);

        if (!$result) {
            echo $conn->error;
            die();
        }
    }
}
