<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NPP = mysqli_real_escape_string($conn, $_POST['NPP']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);

    $sql = "SELECT * FROM users WHERE NPP='$NPP' AND password='$password'"; 
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);
        $role = $user['user_role'];

        switch($role) {
            case "Atasan":
                header("Location: dashboard_atasan.php");
                break;
            case "Anggota":
                header("Location: dashboard_anggota.php");
                break;
            case "Admin":
                header("Location: dashboard_admin.php");
                break;
            default:
                echo "Role tidak dikenali!";
        }

    } else {
        echo "NPP atau password salah!";
    }
}
?>
