<?php
$liftername = $conn->real_escape_string($_GET['info']);
// initialise curl
$ch = curl_init();

$liftername_encode = rawurlencode($liftername);

curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true, // return the transfer as a string of the return value of curl_exec() instead of outputting it out directly. 
    CURLOPT_URL => "http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/api/lifter/read_name.php?name=$liftername_encode", //The URL to fetch. This can also be set when initializing a session with curl_init().
    CURLOPT_USERPWD => 'admin:password123', //	A username and password formatted as "[username]:[password]" to use for the connection.
));
$response = curl_exec($ch); // get the response of

$lifters = json_decode($response, true); // turn into json

curl_close($ch); // close curl resource

// check if result is successful
if (!$lifters) {
    echo "Cannot read from API";
} else {
    $num = 0;
    foreach ($lifters as $key => $lifter) {
        $lifter_country = $lifter['country_name'];
    }
}

// country code
if (strcmp($lifter_country, 'Ireland') === 0) {
    $country_code = 'ie.png';
}
if (strcmp($lifter_country, 'UK') === 0) {
    $country_code = 'gb.png';
}
if (strcmp($lifter_country, 'Wales') === 0) {
    $country_code = 'gb-wls.png';
}
if (strcmp($lifter_country, 'N.Ireland') === 0) {
    $lifter_country = 'Northern Ireland';
    $country_code = 'gb-nir.png';
}
if (strcmp($lifter_country, 'Scotland') === 0) {
    $country_code = 'gb-sct.png';
}
if (strcmp($lifter_country, 'England') === 0) {
    $country_code = 'gb-eng.png';
}
