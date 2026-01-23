<?php
$DB_HOST = "127.0.0.1";
$DB_USER = "root";
$DB_PASS = "";
$DB_NAME = "fam_db"; 

$conn = mysqli_connect ($DB_HOST,$DB_USER, $DB_PASS, $DB_NAME);

if (!$conn){
    die("Database connection failed: " . mysqli_connect_error());
}
else{
    echo("Database connected");
}
?>