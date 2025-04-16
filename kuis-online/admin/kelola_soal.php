<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: ../auth/login.php');
    exit;
}

include '../config/db.php';

// Ambil semua soal dari database
$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "Soal: " . $row["question_text"] . "<br>";
    echo "A. " . $row["option_a"] . " B. " . $row["option_b"] . " C. " . $row["option_c"] . " D. " . $row["option_d"] . "<br>";
    echo "Jawaban yang benar: " . $row["correct_answer"] . "<br><br>";
}
?>
