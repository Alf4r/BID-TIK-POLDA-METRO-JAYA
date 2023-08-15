<?php
$host = 'localhost';
$db_user = 'root';
$db_pass = ''; // Sesuaikan dengan password database Anda, jika ada
$db_name = 'polda_login';

$conn = mysqli_connect($host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
