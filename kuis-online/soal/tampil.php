<?php
session_start();
require_once '../config/koneksi.php';

// Cek apakah user sudah login
if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Simpan soal acak ke session saat pertama kali
if (!isset($_SESSION['soal_acak'])) {
    $stmt = $pdo->query("SELECT * FROM soal ORDER BY RAND()");
    $_SESSION['soal_acak'] = $stmt->fetchAll();
}

$soal = $_SESSION['soal_acak'];

// Jika tidak ada soal
if (empty($soal)) {
    die("Belum ada soal yang tersedia.");
}

// Jika form di-submit (jawaban dikirim)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $jawaban_user = $_POST['jawaban'];
    $id_soal = $_POST['id_soal'];
    $current_index = $_POST['current_index'];
    
    // Simpan jawaban ke session
    $_SESSION['jawaban'][$id_soal] = $jawaban_user;

    // Cek apakah masih ada soal berikutnya
    if (isset($soal[$current_index + 1])) {
        $next_index = $current_index + 1;
        header("Location: tampil.php?index=$next_index");
    } else {
        // Hapus session soal setelah selesai
        unset($_SESSION['soal_acak']);
        header("Location: ../hasil/penilaian.php");
    }
    exit();
}

// Ambil index soal saat ini
$current_index = isset($_GET['index']) ? (int)$_GET['index'] : 0;
if (!isset($soal[$current_index])) {
    $current_index = 0;
}

$current_soal = $soal[$current_index];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Kuis Online</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Kuis Online</h2>
        <div class="progress">
            Soal <?= $current_index + 1 ?> dari <?= count($soal) ?>
        </div>
        
        <form method="post">
            <input type="hidden" name="id_soal" value="<?= $current_soal['id'] ?>">
            <input type="hidden" name="current_index" value="<?= $current_index ?>">
            
            <div class="soal">
                <h3><?= htmlspecialchars($current_soal['pertanyaan']) ?></h3>
                <div class="pilihan">
                    <label><input type="radio" name="jawaban" value="a" required> A. <?= htmlspecialchars($current_soal['pilihan_a']) ?></label>
                </div>
                <div class="pilihan">
                    <label><input type="radio" name="jawaban" value="b"> B. <?= htmlspecialchars($current_soal['pilihan_b']) ?></label>
                </div>
                <div class="pilihan">
                    <label><input type="radio" name="jawaban" value="c"> C. <?= htmlspecialchars($current_soal['pilihan_c']) ?></label>
                </div>
                <div class="pilihan">
                    <label><input type="radio" name="jawaban" value="d"> D. <?= htmlspecialchars($current_soal['pilihan_d']) ?></label>
                </div>
            </div>
            
            <button type="submit"><?= ($current_index + 1 == count($soal)) ? 'Selesai' : 'Lanjut' ?></button>
        </form>
    </div>
</body>
</html>
