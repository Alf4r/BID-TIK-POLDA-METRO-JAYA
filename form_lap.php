<?php
include 'config.php';

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitasi input
    $nama_lengkap = mysqli_real_escape_string($conn, $_POST['nama_lengkap']);
    $no_nik = mysqli_real_escape_string($conn, $_POST['no_nik']);
    $korban = mysqli_real_escape_string($conn, $_POST['korban']);
    $tempat_lahir = mysqli_real_escape_string($conn, $_POST['tempat_lahir']);
    $tanggal_lahir = mysqli_real_escape_string($conn, $_POST['tanggal_lahir']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $kewarganegaraan = mysqli_real_escape_string($conn, $_POST['kewarganegaraan']);
    $jenis_kelamin = mysqli_real_escape_string($conn, $_POST['jenis_kelamin']);
    $agama = mysqli_real_escape_string($conn, $_POST['agama']);
    $pekerjaan = mysqli_real_escape_string($conn, $_POST['pekerjaan']);
    $alamat_lengkap = mysqli_real_escape_string($conn, $_POST['alamat_lengkap']);
    $lokasi_kejadian = mysqli_real_escape_string($conn, $_POST['lokasi_kejadian']);
    $jenis_kejahatan = mysqli_real_escape_string($conn, $_POST['jenis_kejahatan']);
    $kerugian = mysqli_real_escape_string($conn, $_POST['kerugian']);
    $tanggal_kejadian = mysqli_real_escape_string($conn, $_POST['tanggal_kejadian']);
    $waktu_kejadian = mysqli_real_escape_string($conn, $_POST['waktu_kejadian']);
    $detail_motif = mysqli_real_escape_string($conn, $_POST['detail_motif']);
    $provinsi = mysqli_real_escape_string($conn, $_POST['provinsi']);
    $kecamatan = mysqli_real_escape_string($conn, $_POST['kecamatan']);
    $kode_pos = mysqli_real_escape_string($conn, $_POST['kode_pos']);
    $ibu = mysqli_real_escape_string($conn, $_POST['ibu']);
    $bapak = mysqli_real_escape_string($conn, $_POST['bapak']);
    $pekerjaan_ibu = mysqli_real_escape_string($conn, $_POST['pekerjaan_ibu']);
    $pekerjaan_bapak = mysqli_real_escape_string($conn, $_POST['pekerjaan_bapak']);

    // Query untuk memasukkan data ke dalam database
    $sql = "INSERT INTO form_lap (nama_lengkap, no_nik, korban, tempat_lahir, tanggal_lahir, email, kewarganegaraan, jenis_kelamin, agama, pekerjaan, alamat_lengkap, lokasi_kejadian, jenis_kejahatan, kerugian, tanggal_kejadian, waktu_kejadian, detail_motif, provinsi, kecamatan, kode_pos, ibu, bapak, pekerjaan_ibu, pekerjaan_bapak) VALUES ('$nama_lengkap', '$no_nik', '$korban', '$tempat_lahir', '$tanggal_lahir', '$email', '$kewarganegaraan', '$jenis_kelamin', '$agama', '$pekerjaan', '$alamat_lengkap', '$lokasi_kejadian', '$jenis_kejahatan', '$kerugian', '$tanggal_kejadian', '$waktu_kejadian', '$detail_motif', '$provinsi', '$kecamatan', '$kode_pos', '$ibu', '$bapak', '$pekerjaan_ibu', '$pekerjaan_bapak')";

    // Eksekusi query
    if(mysqli_query($conn, $sql)) {
        echo "Laporan berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
