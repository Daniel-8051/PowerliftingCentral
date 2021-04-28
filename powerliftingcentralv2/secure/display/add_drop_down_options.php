<?php
// db connection
include("../config/db_conn.php");

// sql query (put into a function)
$meet_country_sql_query =  "SELECT DISTINCT meet_country_name FROM uk_ireland_powerlifting_meetcountries";
$federation_sql_query =  "SELECT DISTINCT federation_name FROM uk_ireland_powerlifting_federation";

// run sql query
$meet_country_query_result = $conn->query($meet_country_sql_query);
$federation_query_result = $conn->query($federation_sql_query);
?>