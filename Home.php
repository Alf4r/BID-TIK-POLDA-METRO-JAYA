<?php
session_start();
include('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPP = trim($_POST['NPP']);
    $password = trim($_POST['pass']);

    $stmt = $conn->prepare("SELECT password, role FROM user WHERE NPP = ?");
    $stmt->bind_param("s", $NPP);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($user = $result->fetch_assoc()) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['loggedin'] = true;
            $_SESSION['NPP'] = $NPP;
            $_SESSION['role'] = $user['role'];
            
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "NPP tidak ditemukan!";
    }
}

?>