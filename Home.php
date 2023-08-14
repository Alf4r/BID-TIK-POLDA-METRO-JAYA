<!-- <?php
session_start();
include('config.php');

if (isset($_POST['NPP']) && isset($_POST['pass']) && isset($_POST['user'])) {
    $username = $_POST['NPP'];
    $password = $_POST['pass'];
    $role = $_POST['user'];

    // Ambil data user dari database berdasarkan NPP
    $stmt = $conn->prepare("SELECT password, user_role FROM user WHERE NPP=? AND user_role=?");// Diubah tabelnya menjadi user
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $role);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // Verifikasi password
    if ($user && password_verify($password, $user['password'])) {
        // Set session untuk user yang login
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        $_SESSION['user_role'] = $role;

        // Arahkan ke dashboard berdasarkan user_role
        switch ($role) {
            case 'Admin':
                header("Location: dashboard_admin.php");
                break;
            case 'Atasan':
                header("Location: dashboard_atasan.php");
                break;
            case 'Anggota':
                header("Location: dashboard_anggota.php");
                break;
            default:
                header("Location: login.php?error=Invalid user selection");
                break;
        }
    } else {
        header("Location: login.php?error=Invalid username, password, or role");
    }
} else {
    header("Location: login.php?error=Please fill out all fields");
}
?> -->

<?php
session_start();
include('config.php');

if (isset($_POST['NPP']) && isset($_POST['pass']) && isset($_POST['user'])) {
    $username = $_POST['NPP'];
    $password = $_POST['pass'];
    $role = $_POST['user'];

    // Ambil data user dari database berdasarkan NPP
    $stmt = $conn->prepare("SELECT password, user_role FROM user WHERE NPP=? AND user_role=?");
    
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $role);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    // DEBUGGING CODE
    echo "NPP: " . $username . "<br>";
    echo "Input Password: " . $password . "<br>";
    if ($user) {
        echo "Database Password: " . $user['password'] . "<br>";
        echo "Role from DB: " . $user['user_role'] . "<br>";
    } else {
        echo "No user found in the database.<br>";
    }
    
    // Verifikasi password
    if ($user && password_verify($password, $user['password'])) {
        // Set session untuk user yang login
        // ... [sisa kode Anda]
    } else {
        header("Location: login.php?error=Invalid NPP or password");
    }
} else {
    header("Location: login.php?error=Please fill out all fields");
}
?>

