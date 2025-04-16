<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    // Mengecek apakah username sudah ada
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "Username sudah terdaftar.";
    } else {
        // Menyimpan pengguna baru ke dalam database
        $sql = "INSERT INTO users (username, password, role) VALUES ('$username', '$password_hashed', 'user')";
        if ($conn->query($sql) === TRUE) {
            echo "Registrasi berhasil! <a href='login.php'>Login sekarang</a>";
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    }
}
?>

<!-- Formulir registrasi -->
<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Daftar</button>
</form>

<!-- Tautan ke halaman login -->
<p>Sudah punya akun? <a href="login.php">Login sekarang</a></p>
