<?php
include 'config.php';

if(isset($_POST['submit']))
{
    $nama_lengkap = $_POST['nama_lengkap'];
    $no_nik = $_POST['no_nik'];
    $korban = $_POST['korban'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir']; 
    $email = $_POST['email'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama']; 
    $pekerjaan = $_POST['pekerjaan']; 
    $alamat_lengkap = $_POST['alamat_lengkap']; 
    $lokasi_kejadian = $_POST['lokasi_kejadian']; 
    $jenis_kejahatan = $_POST['jenis_kejahatan']; 
    $kerugian = $_POST['kerugian'];
    $tanggal_kejadian = $_POST['tanggal_kejadian'];
    $waktu_kejadian = $_POST['waktu_kejadian'];
    $detail_motif = $_POST['detail_motif']; 
    $provinsi = $_POST['provinsi']; 
    $kecamatan = $_POST['kecamatan']; 
    $kode_pos = $_POST['kode_pos'];
    $ibu = $_POST['ibu'];
    $bapak = $_POST['bapak']; 
    $pekerjaan_ibu = $_POST['pekerjaan_ibu']; 
    $pekerjaan_bapak = $_POST['pekerjaan_bapak'];
    $sql=mysqli_query($con,"select id from users where email='$email'");
    $row=mysqli_num_rows($sql);
    if($row>0)
    {
        echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
    }else{
        $msg=mysqli_query($con,"insert into form_lap (nama_lengkap, no_nik, korban, tempat_lahir, tanggal_lahir, email, kewarganegaraan, jenis_kelamin, agama, pekerjaan, alamat_lengkap, lokasi_kejadian, jenis_kejahatan, kerugian, tanggal_kejadian, waktu_kejadian, detail_motif, provinsi, kabupaten, kecamatan, kode_pos, ibu, bapak, pekerjaan_ibu, pekerjaan_bapak) 
                    values('$nama_lengkap', '$no_nik', '$korban', '$tempat_lahir', '$tanggal_lahir', '$email', '$kewarganegaraan', '$jenis_kelamin', '$agama', '$pekerjaan', '$alamat_lengkap', '$lokasi_kejadian', '$jenis_kejahatan', '$kerugian', '$tanggal_kejadian', '$waktu_kejadian', '$detail_motif', '$provinsi', '$kabupaten', '$kecamatan', '$kode_pos', '$ibu', '$bapak', '$pekerjaan_ibu', '$pekerjaan_bapak')");

        if($msg)
        {
            header("Location: dashboard_anggota.php");
        }
    }
}
mysqli_close($conn);
?>
