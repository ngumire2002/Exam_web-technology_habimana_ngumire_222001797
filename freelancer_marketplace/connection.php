<?php
// names: habimana, reg no: 222001797

session_start();
$hostname = "localhost";
$username = "root";
$password = "";
$database = "Freelancer_marketplace";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
