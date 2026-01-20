<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php?error=" . urlencode("Please login first."));
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>OpsDesk</title>
</head>
<body>
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION["fullname"]); ?>!</h2>
  <p>Role: <?php echo htmlspecialchars($_SESSION["role"]); ?></p>
  <p><a href="logout.php">Logout</a></p>
</body>
</html>
