<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "nongsangreen_nest";
$conn = new mysqli($hostname, $username, $password, $dbname);
if ($conn->connect_error) echo 'Lỗi kết nối data base' . $conn->connect_error;

?>
