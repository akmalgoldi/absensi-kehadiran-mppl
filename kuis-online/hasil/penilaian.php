<?php
require_once '../config/koneksi.php';

if (!isset($_SESSION['user_id']) || !isset($_SESSION['jawaban'])) {
    header("Location: ../soal/tampil.php");
    exit();
}

// Ambil semua soal beserta jawaban benar
$stmt = $pdo->query("SELECT id, jawaban_benar FROM soal");
$soal = $stmt->fetchAll();

$total_soal = count($soal);
$skor = 0;

// Hitung skor
foreach ($soal as $s) {
    if (isset($_SESSION['jawaban'][$s['id']]) && $_SESSION['jawaban'][$s['id']] == $s['jawaban_benar']) {
        $skor++;
    }
}

// Simpan hasil ke database
$stmt = $pdo->prepare("INSERT INTO hasil_kuis (user_id, skor, total_soal) VALUES (?, ?, ?)");
$stmt->execute([$_SESSION['user_id'], $skor, $total_soal]);

// Bersihkan session jawaban
unset($_SESSION['jawaban']);

// Redirect ke halaman skor
header("Location: ../skor.php?skor=$skor&total=$total_soal");
exit();
?>