<?php
// register.php backend logic (top part)
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = new mysqli("localhost", "root", "J@gruti$277", "fitlife");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background-color: #000;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .register-box {
      background: #111;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(255,255,255,0.2);
      width: 300px;
    }

    .register-box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #00ff99;
    }

    .register-box input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 6px;
    }

    .register-box button {
      width: 100%;
      padding: 10px;
      background: #00ff99;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      color: #000;
      font-weight: bold;
      margin-top: 10px;
    }

    .register-box a {
      color: #9999ff;
      display: block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
    }

    .register-box a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="register-box">
    <h2>Create Account</h2>
    <form method="POST" action="register.php">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Register</button>
    </form>
    <a href="login.php">Already have an account? Login</a>
  </div>
</body>
</html>



