<?php
$servername = "localhost";
$username = "root";  // Sesuaikan dengan username MySQL Anda
$password = "";      // Sesuaikan dengan password MySQL Anda
$dbname = "kuis_online"; // Nama database

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
