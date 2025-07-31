<?php
session_start();
include 'config.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// Optionally hash password
$hashedPassword = $password;

$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $email, $hashedPassword);

if ($stmt->execute()) {
    $_SESSION['user'] = $name;
    header("Location: index.php");
} else {
    echo "Registration failed: " . $conn->error;
}
?>




