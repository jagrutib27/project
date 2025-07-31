
<?php
session_start();
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION["user_name"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Fit Life</title>
    <style>
        body {
            margin: 0;
            font-family: -apple-system, sans-serif;
            background-color: #000;
            color: #fff;
            padding: 20px;
        }
        .container {
            max-width: 700px;
            margin: auto;
            background: #111;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 10px #00ff94;
        }
        h1 {
            text-align: center;
            color: #00ff94;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin-top: 30px;
        }
        li {
            background-color: #222;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }
        a {
            text-decoration: none;
            color: #00ff94;
            font-weight: bold;
        }
        .logout {
            text-align: center;
            margin-top: 30px;
        }
        .logout a {
            color: #ff4d4d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, <?php echo htmlspecialchars($name); ?> 👋</h1>
        <ul>
            <li><a href="index.php#bmi">BMI Calculator</a></li>
            <li><a href="index.php#gym">View Gym Workouts</a></li>
            <li><a href="index.php#dietplan">My Diet Plan</a></li>
            <li><a href="index.php#review">My Reviews</a></li>
        </ul>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>
</html>