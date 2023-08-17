<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPP = mysqli_real_escape_string($conn, $_POST['NPP']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM users WHERE NPP = '$NPP'"; 
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Perbandingan password (disarankan untuk menggunakan password_verify di masa depan)
        if ($password == $user['password']) {

            $_SESSION['login_user'] = $user['NPP'];
            $_SESSION['role'] = $user['user_role'];

            $role = $_SESSION['role'];

            switch ($role) {
                case "Atasan":
                    header("Location: dashboard_atasan.php");
                    exit; // Selalu tambahkan 'exit' setelah 'header' untuk menghentikan eksekusi lebih lanjut
                case "Anggota":
                    header("Location: dashboard_anggota.php");
                    exit;
                case "Admin":
                    header("Location: dashboard_admin.php");
                    exit;
                default:
                    echo "Role tidak dikenali!";
            }
        } else {
            echo "Password salah!";
        }
    } else {
        echo "NPP tidak ditemukan!";
    }
}
?>
