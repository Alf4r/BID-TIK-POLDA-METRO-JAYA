<?php
// Mulai sesi
session_start();

// Hapus semua variabel sesi
session_unset();

// Akhirkan sesi
session_destroy();

// Alihkan ke halaman login atau halaman utama
header("Location: index.html");
exit;
?>