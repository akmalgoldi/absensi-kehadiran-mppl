<?php
require_once 'config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: auth/login.php");
    exit();
}

$skor = isset($_GET['skor']) ? (int)$_GET['skor'] : 0;
$total = isset($_GET['total']) ? (int)$_GET['total'] : 1;
$persentase = round(($skor / $total) * 100, 2);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Kuis</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Hasil Kuis</h2>
        
        <div class="hasil-box">
            <h3>Skor Anda: <?= $skor ?> dari <?= $total ?></h3>
            <div class="progress-bar">
                <div class="progress" style="width: <?= $persentase ?>%"></div>
            </div>
            <p><?= $persentase ?>%</p>
        </div>
        
        <div class="actions">
            <a href="dashboard.php" class="btn">Kembali ke Dashboard</a>
            <a href="hasil/riwayat.php" class="btn">Lihat Riwayat</a>
        </div>
    </div>
</body>
</html>