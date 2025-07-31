<?php
// login.php backend logic (top part)
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $conn = new mysqli("localhost", "root", "J@gruti$277", "fitlife");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $email = $_POST["email"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            $_SESSION["user_name"] = $user["name"];
            header("Location: index.php");
            exit();
        } else {
            $error = "Incorrect password.";
        }
    } else {
        $error = "User not found.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
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

    .login-box {
      background: #111;
      padding: 40px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(255,255,255,0.2);
      width: 300px;
    }

    .login-box h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #00ff99;
    }

    .login-box input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: none;
      border-radius: 6px;
    }

    .login-box button {
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

    .login-box a {
      color: #9999ff;
      display: block;
      text-align: center;
      margin-top: 15px;
      text-decoration: none;
    }

    .login-box a:hover {
      text-decoration: underline;
    }

    .error {
      color: red;
      text-align: center;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="login-box">
    <h2>Login</h2>
    <form method="POST" action="login.php">
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
    <a href="register.php">Don't have an account? Register</a>
    <?php if (isset($error)): ?>
      <p class="error"><?= $error ?></p>
    <?php endif; ?>
  </div>
</body>
</html>


