<?php
// checks login status - redirects to login page if not logged in
if (!isset($_SESSION['new_admin'])) {
    header("Location: http://dmcauley21.lampt.eeecs.qub.ac.uk/powerliftingcentralv2/secure/login.php");
    exit();
} 

?>