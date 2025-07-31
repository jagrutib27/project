<?php
// review.php

$conn = new mysqli("localhost", "root", "", "fitlife");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];

    // Basic validation
    if (!empty($name) && !empty($rating) && !empty($review)) {
        // Ensure rating is an integer and within expected range (1-5)
        $rating = (int)$rating;
        if ($rating < 1 || $rating > 5) {
            echo "Invalid rating value!";
            exit();
        }

        $stmt = $conn->prepare("INSERT INTO reviews (name, rating, review) VALUES (?, ?, ?)");
        // 's' for string (name), 'i' for integer (rating), 's' for string (review)
        $stmt->bind_param("sis", $name, $rating, $review);

        if ($stmt->execute()) {
            // Redirect back to the index page with a success message or to the review section
            header("Location: index.php#review");
            exit(); // Always exit after a header redirect
        } else {
            echo "Error inserting review: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields (name, rating, review) are required!";
    }
}

$conn->close(); // Close connection after all operations are done
?>

