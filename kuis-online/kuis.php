<?php
require_once 'config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

// Reset jawaban sebelumnya jika ada
if (isset($_SESSION['jawaban'])) {
    unset($_SESSION['jawaban']);
}

header("Location: soal/tampil.php");
exit();
?>