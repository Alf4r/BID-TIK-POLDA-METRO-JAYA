<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPP = mysqli_real_escape_string($conn, $_POST['NPP']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $user_role = mysqli_real_escape_string($conn, $_POST['user_role']);

    $sql = "SELECT * FROM users WHERE NPP='$NPP' AND password='$password' AND user_role='$user_role'"; 

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_role'] == 'Atasan') {
            header("Location: dashboard_atasan.php");
        } elseif ($row['user_role'] == 'Anggota') {
            header("Location: dashboard_anggota.php");
        } elseif ($row['user_role'] == 'Admin') {
            header("Location: dashboard_admin.php");
        }
        exit;
    } else {
        echo "Username atau password salah!";
    }
}

mysqli_close($conn);
?>
