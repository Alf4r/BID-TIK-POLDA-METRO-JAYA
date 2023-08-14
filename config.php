<?php
$host = "localhost";
$db_user = "root";
$db_pass = ""; // password default untuk localhost biasanya kosong
$db_name = "polda_login";

// Membuat koneksi
$conn = new mysqli($host, $db_user, $db_pass, $db_name);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
