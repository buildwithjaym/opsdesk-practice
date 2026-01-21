<?php
session_start();
require_once __DIR__ . "/../src/db.php";

$fullname = isset($_POST["fullname"]) ? trim($_POST["fullname"]) : "";
$email    = isset($_POST["email"]) ? trim($_POST["email"]) : "";
$password = isset($_POST["password"]) ? $_POST["password"] : "";
$role     = isset($_POST["role"]) ? $_POST["role"] : "";

if ($fullname === "" || $email === "" || $password === "" || $role === "") {
  header("Location: register.php?error=" . urlencode("All fields are required."));
  exit;
}

if ($role !== "Agent" && $role !== "Requester" && $role == "Select" ) {
  header("Location: register.php?error=" . urlencode("Invalid role."));
  exit;
}


$stmt = mysqli_prepare($conn, "SELECT id FROM users WHERE email = ? LIMIT 1");
mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
$res = mysqli_stmt_get_result($stmt);
$exists = $res ? mysqli_fetch_assoc($res) : null;

if ($exists) {
  header("Location: register.php?error=" . urlencode("Email already exists."));
  exit;
}

$hash = password_hash($password, PASSWORD_DEFAULT);

$ins = mysqli_prepare($conn, "INSERT INTO users (fullname, email, password_hash, role, created_at) VALUES (?, ?, ?, ?, NOW())");
mysqli_stmt_bind_param($ins, "ssss", $fullname, $email, $hash, $role);
$ok = mysqli_stmt_execute($ins);

if (!$ok) {
  header("Location: register.php?error=" . urlencode("Registration failed."));
  exit;
}

header("Location: login.php?error=" . urlencode("Account created. Please login."));
exit;
