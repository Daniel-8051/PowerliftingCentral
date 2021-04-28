<?php
    // password
    $passw = "Y9rgsgNlXyJMLnRm";
    
    // username
    $username = "dmcauley21";
    
    // database name
    $db = "dmcauley21";
    
    // host
    $host = "dmcauley21.lampt.eeecs.qub.ac.uk";
    
    // make connection object
    $conn = new mysqli($host, $username, $passw, $db);
    
    // check to see if database connection exists
    if($conn->error){
        echo "not connected".$conn->error;
    }
 
?>