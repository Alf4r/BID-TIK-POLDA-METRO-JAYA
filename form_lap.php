<?php
include 'config.php';

$nama_lengkap = isset($_POST['nama_lengkap']) ? mysqli_real_escape_string($conn, $_POST['nama_lengkap']) : '';
$no_nik = isset($_POST['no_nik']) ? mysqli_real_escape_string($conn, $_POST['no_nik']) : '';
$korban = isset($_POST['korban']) ? mysqli_real_escape_string($conn, $_POST['korban']) : '';
$tempat_lahir = isset($_POST['tempat_lahir']) ? mysqli_real_escape_string($conn, $_POST['tempat_lahir']) : '';
$tanggal_lahir = isset($_POST['tanggal_lahir']) ? mysqli_real_escape_string($conn, $_POST['tanggal_lahir']) : '';
$email = isset($_POST['email']) ? mysqli_real_escape_string($conn, $_POST['email']) : '';
$kewarganegaraan = isset($_POST['kewarganegaraan']) ? mysqli_real_escape_string($conn, $_POST['kewarganegaraan']) : '';
$jenis_kelamin = isset($_POST['jenis_kelamin']) ? mysqli_real_escape_string($conn, $_POST['jenis_kelamin']) : '';
$agama = isset($_POST['agama']) ? mysqli_real_escape_string($conn, $_POST['agama']) : '';
$pekerjaan = isset($_POST['pekerjaan']) ? mysqli_real_escape_string($conn, $_POST['pekerjaan']) : '';
$alamat_lengkap = isset($_POST['alamat_lengkap']) ? mysqli_real_escape_string($conn, $_POST['alamat_lengkap']) : '';
$lokasi_kejadian = isset($_POST['lokasi_kejadian']) ? mysqli_real_escape_string($conn, $_POST['lokasi_kejadian']) : '';
$jenis_kejahatan = isset($_POST['jenis_kejahatan']) ? mysqli_real_escape_string($conn, $_POST['jenis_kejahatan']) : '';
$kerugian = isset($_POST['kerugian']) ? mysqli_real_escape_string($conn, $_POST['kerugian']) : '';
$tanggal_kejadian = isset($_POST['tanggal_kejadian']) ? mysqli_real_escape_string($conn, $_POST['tanggal_kejadian']) : '';
$waktu_kejadian = isset($_POST['waktu_kejadian']) ? mysqli_real_escape_string($conn, $_POST['waktu_kejadian']) : '';
$detail_motif = isset($_POST['detail_motif']) ? mysqli_real_escape_string($conn, $_POST['detail_motif']) : '';
$provinsi = isset($_POST['provinsi']) ? mysqli_real_escape_string($conn, $_POST['provinsi']) : '';
$kabupaten = isset($_POST['kabupaten']) ? mysqli_real_escape_string($conn, $_POST['kabupaten']) : '';
$kecamatan = isset($_POST['kecamatan']) ? mysqli_real_escape_string($conn, $_POST['kecamatan']) : '';
$kode_pos = isset($_POST['kode_pos']) ? mysqli_real_escape_string($conn, $_POST['kode_pos']) : '';
$ibu = isset($_POST['ibu']) ? mysqli_real_escape_string($conn, $_POST['ibu']) : '';
$bapak = isset($_POST['bapak']) ? mysqli_real_escape_string($conn, $_POST['bapak']) : '';
$pekerjaan_ibu = isset($_POST['pekerjaan_ibu']) ? mysqli_real_escape_string($conn, $_POST['pekerjaan_ibu']) : '';
$pekerjaan_bapak = isset($_POST['pekerjaan_bapak']) ? mysqli_real_escape_string($conn, $_POST['pekerjaan_bapak']) : '';

$sql = "INSERT INTO form_lap (nama_lengkap, no_nik, korban, tempat_lahir, tanggal_lahir, email, kewarganegaraan, jenis_kelamin, agama, pekerjaan, alamat_lengkap, lokasi_kejadian, jenis_kejahatan, kerugian, tanggal_kejadian, waktu_kejadian, detail_motif, provinsi, kabupaten, kecamatan, kode_pos, ibu, bapak, pekerjaan_ibu, pekerjaan_bapak)
        VALUES ('$nama_lengkap', '$no_nik', '$korban', '$tempat_lahir', '$tanggal_lahir', '$email', '$kewarganegaraan', '$jenis_kelamin', '$agama', '$pekerjaan', '$alamat_lengkap', '$lokasi_kejadian', '$jenis_kejahatan', '$kerugian', '$tanggal_kejadian', '$waktu_kejadian', '$detail_motif', '$provinsi', '$kabupaten', '$kecamatan', '$kode_pos', '$ibu', '$bapak', '$pekerjaan_ibu', '$pekerjaan_bapak')";

if (mysqli_query($conn, $sql)) {
    header("Location: Formulir_Laporan2.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
