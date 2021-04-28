<?php
include("../config/db_conn.php");

// sql query
$meet_country_sql_query =  "SELECT DISTINCT meet_country_name FROM uk_ireland_powerlifting_meetcountries";
$federation_sql_query =  "SELECT DISTINCT federation_name FROM uk_ireland_powerlifting_federation";
$lifter_country_options_sql_query = "SELECT DISTINCT country_name FROM uk_ireland_powerlifting_countries";

// run sql query
$meet_country_query_result = $conn->query($meet_country_sql_query);
$federation_query_result = $conn->query($federation_sql_query);
$lifter_country_options_result = $conn->query($lifter_country_options_sql_query);

while ($row = $lifter_country_options_result->fetch_assoc()) {
    $lifter_country_list = $row['country_name'];
}
?>