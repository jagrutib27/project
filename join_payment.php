<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Join Premium</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<section class="join-premium-section">
  <h2>Join Our Premium Plan</h2>

  <form action="payment_success.php" method="POST" class="payment-form">
    <input type="text" name="name" placeholder="Your Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <select name="plan" required>
      <option value="" disabled selected>Select Plan</option>
      <option value="Monthly">Monthly - ₹199</option>
      <option value="Quarterly">Quarterly - ₹499</option>
      <option value="Yearly">Yearly - ₹1499</option>
    </select>
    <button type="submit">Make Payment</button>
  </form>

</section>

</body>
</html>
