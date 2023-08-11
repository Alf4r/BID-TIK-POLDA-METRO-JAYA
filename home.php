<?php
include 'config.php';  // Import konfigurasi database

if($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $npp = $_POST['NPP'];
    $password = $_POST['pass'];
    $role = $_POST['user'];

    // $stmt = $pdo->prepare("SELECT * FROM users WHERE NPP = :npp AND password = :password AND role = :role");
    // $stmt->execute(['npp' => $npp, 'password' => $password, 'role' => $role]);

    // $user = $stmt->fetch();

    if ($user) {
        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['role'] = $role;
        $_SESSION['npp'] = $npp;

        // Arahkan ke halaman yang sesuai dengan perannya
        switch($role) {
            case "Admin":
                header("location: dashboard_admin.php");
                break;
            case "Atasan":
                header("location: dashboard_atasan.php");
                break;
            case "Anggota":
                header("location: dashboard_anggota.php");
                break;
            default:
                header("location: index.php?error=Invalid Role!");
        }
    } else {
        header("location: index.php?error=Wrong NPP or Password!");
    }
}
