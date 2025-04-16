<?php
session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: ../auth/login.php');
    exit;
}

include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $quiz_id = $_POST['quiz_id'];
    $question_text = $_POST['question_text'];
    $option_a = $_POST['option_a'];
    $option_b = $_POST['option_b'];
    $option_c = $_POST['option_c'];
    $option_d = $_POST['option_d'];
    $correct_answer = $_POST['correct_answer'];

    $sql = "INSERT INTO questions (quiz_id, question_text, option_a, option_b, option_c, option_d, correct_answer)
            VALUES ('$quiz_id', '$question_text', '$option_a', '$option_b', '$option_c', '$option_d', '$correct_answer')";
    if ($conn->query($sql) === TRUE) {
        echo "Soal berhasil ditambahkan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<form method="POST">
    ID Kuis: <input type="number" name="quiz_id" required><br>
    Soal: <textarea name="question_text" required></textarea><br>
    Opsi A: <input type="text" name="option_a" required><br>
    Opsi B: <input type="text" name="option_b" required><br>
    Opsi C: <input type="text" name="option_c" required><br>
    Opsi D: <input type="text" name="option_d" required><br>
    Jawaban yang benar: <select name="correct_answer">
        <option value="a">A</option>
        <option value="b">B</option>
        <option value="c">C</option>
        <option value="d">D</option>
    </select><br>
    <button type="submit">Tambah Soal</button>
</form>
