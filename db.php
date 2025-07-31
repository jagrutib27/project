<?php
$host = "localhost";
$username = "root";
$password = "J@gruti$277";
$database = "fitlife";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

