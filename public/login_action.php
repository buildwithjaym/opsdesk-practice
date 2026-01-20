<?php
session_start();
require_once __DIR__ . "/../src/db.php";

$email = isset ($_POST["email"]) ? trim($_POST["email"]): "";
$password = isset ($_POST["password"]) ? ($_POST["password"]) : "";

if ($email == "" || $password =="" ){
    header("Location: login.php?error " . urlencode(" Email and Password are required"));
    exit;
}

$stmt = mysqli_prepare($conn, "SELECT id, fullname, password_hash, role from users WHERE email=? LIMIT 1");
mysqli_stmt_bind_param($stmt, "s", $email );
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$user = $result ? mysqli_fetch_assoc($result): null;

if (!$user){
    header("Location:  login.php?error=" . urlencode("Invalid Credentials"));
    exit;
}

if (!password_verify($password, $user["password_hash"])){
    header("Location: login.php?error=" . urlencode("Invalid email or password"));
    exit;
}

$_SESSION ["user_id"] = $user["id"];
$_SESSION ["fullname"] = $user["fullname"];
$_SESSION ["role"] = $user["role"];

$now = date("Y-m-d H:i:s");

$upd = mysqli_prepare($conn, "SELECT users SET last_login = ?   WHERE id=?");
mysqli_stmt_bind_param($upd, "si", $now, $user["id"]);
myswli_stmt_execute($upd);

header("Location: index.php");
exit;
?>