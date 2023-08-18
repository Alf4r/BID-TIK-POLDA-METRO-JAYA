<?php
include 'config.php';
session_start();

// Cek apakah pengguna sudah login
if (!isset($_SESSION['login_user'])) {
    header("location: login.php");
    exit;
}

// Cek apakah pengguna memiliki hak akses untuk halaman Atasan
if ($_SESSION['role'] !== 'Anggota') {
    echo "Anda tidak memiliki akses ke halaman ini!";
    exit;
}
// Mengambil nama pengguna dari database berdasarkan NPP
$NPP = $_SESSION['login_user'];

$query = "SELECT nama FROM users WHERE NPP = '$NPP'"; // Gantilah 'users' dengan nama tabel Anda jika berbeda
$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['nama'] = $row['nama'];
}
// Konten dashboard Atasan
$_SESSION['login_user'] . "!";
// ... kode lain untuk konten dashboard ...
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard </title>
    <meta charset="utf-8">
    <title>BID TIK POLDA METRO JAYA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/foto_empJAKPUSK.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .profile-dropdown {
            cursor: pointer;
            background-color: navy;
            color: white;
        }


        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            border: 1px solid #ccc;
            list-style-type: none;
            padding: 0;
            margin-top: 8px;  /* penyesuaian margin supaya sedikit berjarak dari kotak profil */
            right: 0;
            width: 200px;
            z-index: 99;
            top: 100%;  /* Sejajarkan ke bagian bawah .profile-dropdown */
            border-radius: 8px; 
        }

        .dropdown-content li a {
            padding: 10px;
            display: block;
            text-decoration: none;
        }

        .dropdown-content li a:hover {
            background-color: #eee;
        }

        .show {
            display: block;
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
<body>
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->

    <div class="navbar-1">
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0" style="justify-content: center;">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5 split">
            <img src="img/logo_polisi.jpeg" style="margin-left: -44px;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav" style="margin-left: auto;">
            <li class="nav-item">
                <a class="nav-link" href="beranda_anggota.php">Beranda <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="rekapitulasi.php">Rekapitulasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Formulir_Laporan1.php">Formulir Laporan</a>
            </li>
        </ul>
        <div class="w3-container" style="margin-left: auto;">
            <div onclick="toggleDropdown()" class="profile-dropdown" style="margin-left: auto;display: flex;">
                <img src="https://cdn0.iconfinder.com/data/icons/avatars-3/512/avatar_hipster_guy-512.png" class="navbar-brand d-flex align-items-center px-4 px-lg-5 split">
                <div style="display: flex;flex-wrap: wrap;align-content: center;">
                    <span class="profile-name"><?php echo $_SESSION['nama']; ?></span>
                </div>
            </div>
        </div>
        <ul id="dropdownContent" class="dropdown-content">
            <li><a href="#"><i class="mdi mdi-email-outline"></i>Messages</a></li>
            <li><a href="#"><i class="mdi mdi-account"></i>Account</a></li>
            <li><a href="#"><i class="mdi mdi-settings"></i>Settings</a></li>
            <li><a href="logout.php"><i class="mdi mdi-logout"></i>Logout</a></li>
        </ul>
    </div>
    </nav>
    <script>
        $(document).ready(function(){
            $('.profile-dropdown').click(function(event){
                event.stopPropagation();
                $('.dropdown-content').toggle(); 
            });

            // Jika user mengklik di luar dropdown, maka tutup dropdown
            $(document).click(function(){
                $('.dropdown-content').hide();
            });
        });
    </script>
    </div>
    <div style="width:100%;height:400px;">
        <img class="center" src="img/Lambang_Polri.png" style="display: block;margin-right: auto;margin-left: auto;margin-top: 218px;">
        <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center" style="background: rgba(247, 247, 247); opacity: 0.9; height: 129%;">
    </div>
</body>
</html>