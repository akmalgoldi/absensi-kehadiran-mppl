<?php
require_once '../config/koneksi.php';

if (!isset($_SESSION['user_id']) || $_SESSION['username'] !== 'admin') {
    header("Location: ../auth/login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pertanyaan = $_POST['pertanyaan'];
    $pilihan_a = $_POST['pilihan_a'];
    $pilihan_b = $_POST['pilihan_b'];
    $pilihan_c = $_POST['pilihan_c'];
    $pilihan_d = $_POST['pilihan_d'];
    $jawaban_benar = $_POST['jawaban_benar'];

    $stmt = $pdo->prepare("INSERT INTO soal (pertanyaan, pilihan_a, pilihan_b, pilihan_c, pilihan_d, jawaban_benar) VALUES (?, ?, ?, ?, ?, ?)");
    if ($stmt->execute([$pertanyaan, $pilihan_a, $pilihan_b, $pilihan_c, $pilihan_d, $jawaban_benar])) {
        header("Location: tampil.php?sukses=1");
    } else {
        header("Location: tambah.php?error=1");
    }
    exit();
}
?>