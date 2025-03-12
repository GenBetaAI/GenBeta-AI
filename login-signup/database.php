<?php

$hostName = "localhost";
$dbuser = "root";
$dbPassword = "";
$dbName = "db_system";
$conn = mysqli_connect($hostName, $dbuser, $dbPassword, $dbName);
if(!$conn) {
    die("something went wrong");
}
?>
