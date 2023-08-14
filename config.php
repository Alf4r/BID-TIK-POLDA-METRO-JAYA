<?php
$server = "localhost";
$username = "root"; //username default phpMyAdmin
$password = ""; //password default kosong untuk phpMyAdmin
$database = "polda_login";

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
