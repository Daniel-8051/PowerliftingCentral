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
        header('Content-Type: application/json');
        header('Access-Control-Allow-Methods: DELETE'); // allows delete 
        header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

        // database connection
        include("../../config/db_conn.php");

        // get id
        $lifter_id = isset($_GET['lifter_id']) ? $_GET['lifter_id'] : die();

        // sql query
        $sql = "DELETE FROM uk_ireland_powerlifting WHERE lifter_id = '$lifter_id'";

        // run query on db
        $result = mysqli_query($conn, $sql);

        if ($result) {
            // echo json_encode(
            //     array('message' => 'Lifter deleted')
            // );
            // header('Location: ../../secure/success/delete_success.php');
        } else {
            echo json_encode(
                array('message' => 'Lifter not deleted')
            );
        }
    } else {
        header("WWW-Authenticate: Basic realm='Private Area'");
        header("HTTP/1.0 401 Unathorized");
        print "Sorry, you need proper credentials";
    }
}
