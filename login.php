<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPP = mysqli_real_escape_string($conn, $_POST['NPP']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']); 

    $sql = "SELECT * FROM users WHERE NPP='$NPP' AND password='$password'"; 

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        header("Location: dashboard_anggota.php");
    } else {
        echo "Username atau password salah!";
    }
}

mysqli_close($conn);
?>
