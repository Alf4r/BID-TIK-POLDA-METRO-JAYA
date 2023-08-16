<?php
	// memulai session
	session_start();
	// membaca nilai variabel session 
	$chk_sess = $_SESSION['Anggota'];
	// memanggil file koneksi
	include("config.php");
	// mengambil data pengguna dari tabel pengguna
	$sql_sess = "SELECT * FROM users WHERE NPP='". $chk_sess ."'";
	$ress_sess = mysqli_query($conn, $sql_sess);
	$row_sess = mysqli_fetch_array($ress_sess);
	// menyimpan id_pengguna yang sedang login
	$sess_Anggotaid = $row_sess['id'];
	$sess_Anggotanpp = $row_sess['NPP'];
	// mengarahkan ke halaman login.php apabila session belum terdaftar
	if(! isset($chk_sess)) {
		header("location: login.php?login=false");
	}
?>