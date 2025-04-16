<?php
session_start();

// Cek apakah pengguna sudah login
if (isset($_SESSION['user_id'])) {
    // Jika pengguna adalah admin, arahkan ke dashboard admin
    if ($_SESSION['role'] == 'admin') {
        header('Location: admin/dashboard.php');
        exit;
    }
    
    // Jika pengguna adalah user biasa, arahkan ke halaman user
    if ($_SESSION['role'] == 'user') {
        header('Location: user/kuis.php');
        exit;
    }
} else {
    // Jika pengguna belum login, arahkan ke halaman login
    header('Location: auth/login.php');
    exit;
}
?>
