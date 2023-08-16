<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// memulai session
session_start();

// memanggil file koneksi
include 'config.php' ;
$_SESSION['NPP'] = "";

if (isset($_POST['login_form'])) {
    if (empty($_POST['NPP']) || empty($_POST['password']) || empty(($_POST['user_role'] ))) {
        header("location: login.php?err=empty");
    } else {
        $user = $_POST['NPP'];
        $pass = $_POST['password'];
        $role = $_POST['user_role'];

        $user = mysqli_real_escape_string($conn, $user);
        $pass = mysqli_real_escape_string($conn, $pass);

        if ($role == "Admin") {
            $sql = "SELECT * FROM users WHERE NPP='" . $user . "' AND password='" . $pass . "'";
            $ress = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($ress);
            $dataku = mysqli_fetch_array($ress);
            if ($rows == 1) {
                $_SESSION['Admin'] = strtolower($dataku['NPP']);
                header("location: dashboard_admin.php?login=success");
            } else {
                header("location: login.php?err=not_found");
            }
        } elseif ($role == "Anggota") {
            $sql = "SELECT * FROM employee WHERE NPP='" . $user . "' AND password='" . $pass . "'";
            $ress = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($ress);
            $dataku = mysqli_fetch_array($ress);
            if ($rows == 1) {
                $_SESSION['Anggota'] = strtolower($dataku['NPP']);
                header("location: dashboard_anggota.php?login=success");
            } else {
                echo "ada yang salah!";
            }
        } elseif ($role == "Atasan") {
            $sql = "SELECT * FROM employee WHERE NPP='" . $user . "' AND password='" . $pass . "'";
            $ress = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($ress);
            $dataku = mysqli_fetch_array($ress);
            if ($rows == 1) {
                $_SESSION['Atasan'] = strtolower($dataku['NPP']);
                header("location: dashboard_atasan.php?login=success");
            } else {
                header("location: login.php?err=not_found");
            }
        } else {
            echo "NPP atau pass salah!";
        }
    }
}


/*
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPP = mysqli_real_escape_string($conn, $_POST['NPP']);
    $pass = mysqli_real_escape_string($conn, $_POST['pass']); 

    $sql = "SELECT * FROM users WHERE NPP='$NPP' AND pass='$pass'"; 

    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        header("Location: dashboard_anggota.php");
    } else {
        echo "Username atau pass salah!";
    }
}

mysqli_close($conn);
*/

?>
