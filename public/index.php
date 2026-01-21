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
<style>
:root{
  --blue-6: #b45dee34;
  --blue-1:#0ea5e9;
  --blue-2:#2563eb;

}
body{
  margin:0;
  min-height: 100vh;
  background: linear-gradient(135deg, var(--blue-1), var(--blue-2));
  padding: 10px;
  font-family: Arial, sans-serif;
  overflow:hidden;
  color: #ffff;
  display:flex;

}
a {
  text-decoration: none;
  color: #ffff;
  font-weight: 10px;
}
#header{
  min-height:90vh;
  align-items: space-in-between;

}



</style> 
  <meta charset="UTF-8">
  <title>Ticketing System</title>
</head>
<body>
  <div id="header">
  <h2>Welcome, <?php echo htmlspecialchars($_SESSION["fullname"]); ?>!</h2>
  <p>Role: <?php echo htmlspecialchars($_SESSION["role"]); ?></p>
  <p><a href="logout.php">Logout</a></p>
</div>
</body>
</html>
