<?php
include 'db.php';

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$plan = $_POST['plan'];

$query = "INSERT INTO payments (name, email, plan) VALUES ('$name', '$email', '$plan')";
if (mysqli_query($conn, $query)) {
    echo "<h2>Payment Successful!</h2><p>Thank you, $name, for joining our <strong>$plan</strong> plan.</p>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
