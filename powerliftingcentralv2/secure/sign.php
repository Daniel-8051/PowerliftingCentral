<?php

session_start();

include("../config/db_conn.php");

// get username & pw from login form
$uname = $_POST["userfield"];

$pass = $_POST["passfield"];

// check details agaisnt credentials stored in database
$checkuser = "SELECT * FROM uk_ireland_powerlifting_users WHERE user='$uname' AND password=MD5('$pass')";

$result = $conn->query($checkuser);

if(!$result){
echo $conn->error;
}

$num = $result->num_rows;

// if there is a match - set new session variable 
if($num > 0){
    $_SESSION['new_admin'] = $uname;
    header("Location: admin_stats.php");
    exit();
}else{
    header("Location: login.php");
    exit();
}
