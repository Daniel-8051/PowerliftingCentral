<?php
// initialise curl
$ch = curl_init();

// encode lifter name (replaces spaces with %20)
$liftername_encode = rawurlencode($liftername);

curl_setopt_array($ch, array(
    CURLOPT_RETURNTRANSFER => true, // return the transfer as a string of the return value of curl_exec() instead of outputting it out directly. 
    CURLOPT_URL => "http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/api/lifter/read_name.php?name=$liftername_encode", //The URL to fetch. This can also be set when initializing a session with curl_init().
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
        $lifter_id = $lifter["lifter_id"];
        echo "<tr>
                    <th scope='row'><small><span title='Delete' class='btn-group'>
                    <a title='Delete' href='success/delete_success.php?lifter_id=$lifter_id' class='btn btn-primary btn-sm'><ion-icon name='trash-outline'></ion-icon></a>
                    <a title='Edit' href='edit.php?lifter_id=$lifter_id' class='btn btn-primary btn-sm'><ion-icon name='create-outline'></ion-icon></a>
                    </span></small></th>
                    <td><small>{$lifter['place']}</small></td>
                    <td><small>{$lifter['federation']}</small></td>
                    <td><small>{$lifter['date']}</small></td>
                    <td><small>{$lifter['meet_country_name']}</small></td>
                    <td><small>{$lifter['meet_name']}</small></td>
                    <td><small>{$lifter['division']}</small></td>
                    <td><small>{$lifter['age']}</small></td>
                    <td><small>{$lifter['weight_class']}</small></td>
                    <td><small>{$lifter['best_squat']}</small></td>
                    <td><small>{$lifter['best_bench']}</small></td>
                    <td><small>{$lifter['best_deadlift']}</small></td>
                    <td><small>{$lifter['total']}</small></td>
                    <td><small>{$lifter['wilks']}</small></td>
                </tr>";
    }
}
