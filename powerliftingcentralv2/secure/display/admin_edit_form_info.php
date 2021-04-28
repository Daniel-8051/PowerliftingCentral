<?php
include("../config/db_conn.php");

$lifter_id = $conn->real_escape_string($_GET["lifter_id"]);

// initialise curl
$ch = curl_init();

curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true, // return the transfer as a string of the return value of curl_exec() instead of outputting it out directly. 
    CURLOPT_URL => "http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/api/lifter/read_single.php?lifter_id=$lifter_id", //The URL to fetch. This can also be set when initializing a session with curl_init().
    CURLOPT_USERPWD => 'admin:password123', //	A username and password formatted as "[username]:[password]" to use for the connection.
));
$response = curl_exec($ch); // get the response of

$lifters = json_decode($response, true); // turn into json

curl_close($ch); // close curl resource

if (!$lifters) {
    echo $conn->error;
} else {
    $num = 0;
    foreach ($lifters as $key => $lifter) {
        $num++;
        $lifter_id = $lifter['lifter_id'];
        $name = $lifter['name'];
        $country_name = $lifter['country_name'];
        $gender = $lifter['gender'];
        $age = $lifter['age'];
        $bodyweight = $lifter['bodyweight'];
        $best_squat = $lifter['best_squat'];
        $best_bench = $lifter['best_bench'];
        $best_deadlift = $lifter['best_deadlift'];
        $date_unformatted = $lifter['date'];
        $date_formatted = date('d/m/Y', strtotime($date_unformatted));
        $place = $lifter['place'];
        $federation = $lifter['federation'];
        $meet_name = $lifter['meet_name'];
        $meet_country_name = $lifter['meet_country_name'];
    }
}
?>