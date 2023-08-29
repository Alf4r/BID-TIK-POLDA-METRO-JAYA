<?php
include 'config.php';

$ibu = filter_input(INPUT_POST, 'ibu', FILTER_SANITIZE_STRING);
$bapak = filter_input(INPUT_POST, 'bapak', FILTER_SANITIZE_STRING);
$pekerjaan_ibu = filter_input(INPUT_POST, 'pekerjaan_ibu', FILTER_SANITIZE_STRING);
$pekerjaan_bapak = filter_input(INPUT_POST, 'pekerjaan_bapak', FILTER_SANITIZE_STRING);

$sql = "INSERT INTO form_lap(ibu, bapak, pekerjaan_ibu, pekerjaan_bapak) VALUES (?,?,?,?)";

// Mempersiapkan statement
$stmt = $conn->prepare($sql);

// Mengikat parameter
$stmt->bind_param("ssss",
    $_POST['ibu'], 
    $_POST['bapak'], $_POST['pekerjaan_ibu'], $_POST['pekerjaan_bapak']);

// Eksekusi statement
$stmt->execute();

echo "Data berhasil disimpan";

// Menutup statement dan koneksi
$stmt->close();
$conn->close();
?>
