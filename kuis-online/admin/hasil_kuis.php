<?php
session_start();

// Cek apakah user yang login adalah admin
if ($_SESSION['role'] != 'admin') {
    header('Location: ../auth/login.php');
    exit;
}

include '../config/db.php';

// Query untuk mengambil hasil kuis dari tabel quiz_results
$sql = "SELECT qr.id, u.username, q.title AS quiz_title, qr.score, qr.total_questions, qr.completion_time, qr.completed_at 
        FROM quiz_results qr
        JOIN users u ON qr.user_id = u.id
        JOIN quizzes q ON qr.quiz_id = q.id
        ORDER BY qr.completed_at DESC";  // Mengurutkan berdasarkan waktu penyelesaian terbaru
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Kuis</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>

    <h1>Hasil Kuis</h1>

    <table border="1">
        <thead>
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Kuis</th>
                <th>Skor</th>
                <th>Total Soal</th>
                <th>Waktu Penyelesaian (detik)</th>
                <th>Waktu Penyelesaian</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                $no = 1;
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$no}</td>
                            <td>{$row['username']}</td>
                            <td>{$row['quiz_title']}</td>
                            <td>{$row['score']}</td>
                            <td>{$row['total_questions']}</td>
                            <td>{$row['completion_time']}</td>
                            <td>{$row['completed_at']}</td>
                        </tr>";
                    $no++;
                }
            } else {
                echo "<tr><td colspan='7'>Tidak ada hasil kuis yang tersedia.</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <br>
    <a href="dashboard.php">Kembali ke Dashboard</a>

</body>
</html>
