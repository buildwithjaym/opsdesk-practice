<?php
session_start();
$fullname = isset($_SESSION["fullname"]) ? $_SESSION["fullname"] : "";
session_destroy();
header("Location: login.php?error=" . urlencode("Logged out") . "&name=" . urlencode($fullname));
exit;
?>