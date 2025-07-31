<?php
include 'db.php';

$username = mysqli_real_escape_string($conn, $_POST['username']);
$rating = $_POST['rating'];
$comment = mysqli_real_escape_string($conn, $_POST['comment']);

// If session exists, use user_id; else NULL
session_start();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : "NULL";

$query = "INSERT INTO reviews (user_id, username, rating, comment) VALUES ($user_id, '$username', '$rating', '$comment')";

if (mysqli_query($conn, $query)) {
    header("Location: index.php#review");
} else {
    echo "Error: " . mysqli_error($conn);
}
?>



