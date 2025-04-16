<?php
require_once '../config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Ambil riwayat kuis user
$stmt = $pdo->prepare("SELECT * FROM hasil_kuis WHERE user_id = ? ORDER BY tanggal DESC");
$stmt->execute([$_SESSION['user_id']]);
$riwayat = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Riwayat Kuis</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Riwayat Kuis</h2>
        <p><a href="../dashboard.php">Kembali ke Dashboard</a></p>
        
        <?php if (empty($riwayat)): ?>
            <p>Belum ada riwayat kuis.</p>
        <?php else: ?>
            <table>
                <tr>
                    <th>Tanggal</th>
                    <th>Skor</th>
                    <th>Total Soal</th>
                    <th>Persentase</th>
                </tr>
                <?php foreach ($riwayat as $r): ?>
                    <tr>
                        <td><?= date('d M Y H:i', strtotime($r['tanggal'])) ?></td>
                        <td><?= $r['skor'] ?></td>
                        <td><?= $r['total_soal'] ?></td>
                        <td><?= round(($r['skor'] / $r['total_soal']) * 100, 2) ?>%</td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</body>
</html>