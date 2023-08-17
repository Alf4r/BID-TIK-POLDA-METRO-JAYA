<?php
include 'config.php';
$users = fetchAllUsers($conn);

function fetchAllUsers($conn) {
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);
    
    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    }
    
    $users = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    
    return $users;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard</title>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/foto_empJAKPUSK.png" rel="icon">

    <!-- Google Web Fonts -->
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
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top p-0" style="justify-content: center; margin-right: 150px; background-color: white;">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5 split">
            <img src="img/logo_polisi.jpeg" alt style="margin-left: -548%;">
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.html">Manage User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Formulir_Laporan1.php">Logout</a>
            </li>
        </ul>
        <form class="">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </nav>

    <div class="w3-container" style="display:flex;flex-wrap:wrap;margin:56px">
            <img class="center" src="img/Lambang_Polri.png" style="display: flex;margin-right: auto;margin-left: auto;margin-top: 218px;">
            <div class="position-absolute top-0 start-0 w-100  d-flex align-items-center" style="justify-content:center;background: rgba(247, 247, 247); opacity: 0.9; height: 129%;">
            <div class="content-container" style="position:relative;display:flex;flex-direction:column;align-items:center;width: 100%;background: rgba(247, 247, 247, 0.9);padding: 135px;margin-bottom: 641px;">
                <h2>Daftar Pengguna</h2>
                <table border="1" style="width:80%; margin-top:20px;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NPP</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    if ($users) {
                        foreach ($users as $user) {
                            echo "<tr>";
                            echo "<td>" . $user['id'] . "</td>";
                            echo "<td>" . $user['NPP'] . "</td>";
                            echo "<td>" . $user['user_role'] . "</td>";
                            echo "<td><a href='edit.php?id=" . $user['id'] . "'>Edit</a> | <a href='delete.php?id=" . $user['id'] . "'>Delete</a></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Tidak ada data user.</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
    </div> 

   
</body>

</html>
