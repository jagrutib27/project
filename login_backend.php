<?php
session_start();
include 'config.php';

$email = trim($_POST['email']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();

    // Trim DB value too in case of accidental space
    if ($password === trim($user['password'])) {
        $_SESSION['user'] = $user['name'];
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('❌ Incorrect password'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('❌ Email not found'); window.history.back();</script>";
}
?>

