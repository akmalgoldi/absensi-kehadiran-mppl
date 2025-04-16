<?php
session_start();

// Cek apakah user yang login adalah admin
if ($_SESSION['role'] != 'admin') {
    header('Location: ../auth/login.php');
    exit;
}

echo "<h1>Selamat datang, " . $_SESSION['username'] . "!</h1>";

// Link ke halaman Kelola Soal
echo "<p><a href='kelola_soal.php'>Kelola Soal</a></p>";

// Link ke halaman Tambah Soal
echo "<p><a href='tambah_soal.php'>Tambah Soal</a></p>";

// Link ke halaman Lihat Hasil Kuis
echo "<p><a href='hasil_kuis.php'>Lihat Hasil Kuis</a></p>";

// Logout link
echo "<p><a href='../auth/logout.php'>Logout</a></p>";
?>
