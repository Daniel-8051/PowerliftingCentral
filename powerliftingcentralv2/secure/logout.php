<?php
// if not set - redirect to login page
session_start();
if (!isset($_SESSION['new_admin'])) {
    header("Location: login.php");
    exit();
} else {
    // unset session variable - redirect to login page
    unset($_SESSION['new_admin']);
    session_destroy();
    header("Location: login.php");
    exit();
}
?>
