<?php
include("../config/db_conn.php");

$jointabledata = "SELECT * FROM uk_ireland_powerlifting_users, uk_ireland_powerlifting_user_type WHERE uk_ireland_powerlifting_users.user_type = uk_ireland_powerlifting_user_type.id";

$result = $conn->query($jointabledata);

if (!$result) {
    echo $conn->error;
} else {
    $num = 0;
    while ($row = $result->fetch_assoc()) {
        $num++;
        echo "<tr>
                    <td><small>{$row['user']}</small></td>
                    <td><small>{$row['type_name']}</small></td>
                    <td><small>{$row['user_email']}</small></td>
                </tr>";  
    }
}
?>