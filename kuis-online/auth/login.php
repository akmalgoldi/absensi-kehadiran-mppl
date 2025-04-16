<?php
session_start();
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk mengecek username di database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);
    $user = $result->fetch_assoc();

    // Verifikasi password
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];
        header('Location: ../index.php');
        exit;
    } else {
        echo "Username atau password salah.";
    }
}
?>

<!-- Formulir login -->
<form method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" required><br>

    <button type="submit">Login</button>
</form>

<!-- Tautan ke halaman registrasi -->
<p>Belum punya akun? <a href="register.php">Daftar sekarang</a></p>
