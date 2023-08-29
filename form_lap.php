<?php
include 'config.php';


$nama_lengkap = $_POST["nama_lengkap"];
$no_nik = filter_input(INPUT_POST, 'no_nik', FILTER_VALIDATE_INT);
$korban = filter_input(INPUT_POST, 'korban', FILTER_SANITIZE_STRING);
$tempat_lahir = filter_input(INPUT_POST, 'tempat_lahir', FILTER_SANITIZE_STRING);
$tanggal_lahir = filter_input(INPUT_POST, 'tanggal_lahir', FILTER_SANITIZE_STRING);  // Harap validasi lebih lanjut untuk format tanggal
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$kewarganegaraan = filter_input(INPUT_POST, 'kewarganegaraan', FILTER_SANITIZE_STRING);
$jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
$agama = filter_input(INPUT_POST, 'agama', FILTER_SANITIZE_STRING);
$pekerjaan = filter_input(INPUT_POST, 'pekerjaan', FILTER_SANITIZE_STRING);
$alamat_lengkap = filter_input(INPUT_POST, 'alamat_lengkap', FILTER_SANITIZE_STRING);
$lokasi_kejadian = filter_input(INPUT_POST, 'lokasi_kejadian', FILTER_SANITIZE_STRING);
$jenis_kejahatan = filter_input(INPUT_POST, 'jenis_kejahatan', FILTER_SANITIZE_STRING);
$kerugian = filter_input(INPUT_POST, 'kerugian', FILTER_SANITIZE_STRING); 
$tanggal_kejadian = filter_input(INPUT_POST, 'tanggal_kejadian', FILTER_SANITIZE_STRING);  // Harap validasi lebih lanjut untuk format tanggal
$waktu_kejadian = filter_input(INPUT_POST, 'waktu_kejadian', FILTER_SANITIZE_STRING);  // Harap validasi lebih lanjut untuk format waktu
$detail_motif = filter_input(INPUT_POST, 'detail_motif', FILTER_SANITIZE_STRING);
$provinsi = filter_input(INPUT_POST, 'provinsi', FILTER_SANITIZE_STRING);
$kecamatan = filter_input(INPUT_POST, 'kecamatan', FILTER_SANITIZE_STRING);
$kode_pos = filter_input(INPUT_POST, 'kode_pos', FILTER_VALIDATE_INT);

var_dump($nama_lengkap, $no_nik); // tambahkan semua variabel lainnya


$sql = "INSERT INTO form_lap (
    nama_lengkap, no_nik, korban, tempat_lahir, tanggal_lahir, email,
    kewarganegaraan, jenis_kelamin, agama, pekerjaan, alamat_lengkap,
    lokasi_kejadian, jenis_kejahatan, kerugian, tanggal_kejadian,
    waktu_kejadian, detail_motif, provinsi, kecamatan, kode_pos) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Mempersiapkan statement
$stmt = $conn->prepare($sql);

// Mengikat parameter
$stmt->bind_param("sissssssssssssiisssi", 
    $_POST['nama_lengkap'], $_POST['no_nik'], $_POST['korban'], 
    $_POST['tempat_lahir'], $_POST['tanggal_lahir'], $_POST['email'], 
    $_POST['kewarganegaraan'], $_POST['jenis_kelamin'], $_POST['agama'], 
    $_POST['pekerjaan'], $_POST['alamat_lengkap'], $_POST['lokasi_kejadian'], 
    $_POST['jenis_kejahatan'], $_POST['kerugian'], $_POST['tanggal_kejadian'], 
    $_POST['waktu_kejadian'], $_POST['detail_motif'], $_POST['provinsi'], 
    $_POST['kecamatan'], $_POST['kode_pos']
);
// Eksekusi statement
$stmt->execute();

header(Location:Formulir_Laporan2.php);

// Menutup statement dan koneksi
$stmt->close();
$conn->close();

?>
