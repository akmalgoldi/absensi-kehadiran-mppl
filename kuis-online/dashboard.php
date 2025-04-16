<?php
require_once 'config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Selamat datang, <?= htmlspecialchars($_SESSION['nama_lengkap']) ?>!</h2>
        
        <div class="menu">
            <?php if ($_SESSION['username'] === 'admin'): ?>
                <a href="soal/tambah.php" class="btn">Tambah Soal</a>
            <?php endif; ?>
            
            <a href="kuis.php" class="btn">Mulai Kuis</a>
            <a href="hasil/riwayat.php" class="btn">Lihat Riwayat</a>
            <a href="auth/logout.php" class="btn logout">Logout</a>
        </div>
    </div>
</body>
</html>