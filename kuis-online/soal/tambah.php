<?php 
require_once '../config/koneksi.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit();
}

// Hanya admin yang bisa menambah soal (contoh: username admin)
if ($_SESSION['username'] !== 'admin') {
    header("Location: ../dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Soal</title>
    <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Soal Kuis</h2>
        <form action="simpan.php" method="post">
            <div class="form-group">
                <label>Pertanyaan</label>
                <textarea name="pertanyaan" required></textarea>
            </div>
            <div class="form-group">
                <label>Pilihan A</label>
                <input type="text" name="pilihan_a" required>
            </div>
            <div class="form-group">
                <label>Pilihan B</label>
                <input type="text" name="pilihan_b" required>
            </div>
            <div class="form-group">
                <label>Pilihan C</label>
                <input type="text" name="pilihan_c" required>
            </div>
            <div class="form-group">
                <label>Pilihan D</label>
                <input type="text" name="pilihan_d" required>
            </div>
            <div class="form-group">
                <label>Jawaban Benar</label>
                <select name="jawaban_benar" required>
                    <option value="a">A</option>
                    <option value="b">B</option>
                    <option value="c">C</option>
                    <option value="d">D</option>
                </select>
            </div>
            <button type="submit">Simpan Soal</button>
        </form>
        <p><a href="../dashboard.php">Kembali ke Dashboard</a></p>
    </div>
</body>
</html>