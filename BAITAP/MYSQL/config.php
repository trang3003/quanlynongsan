<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "ql_bansua";
$conn = new mysqli($hostname, $username, $password, $dbname);
if($conn->connect_error){
    die("Failed".$conn->connect_error);
}
?>