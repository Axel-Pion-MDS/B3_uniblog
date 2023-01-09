<?php 
require("../config/config.php");

// Check if something was sent in post method
if (empty($_POST)) {
  header("Location: ../login.php");
  exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

// Check if entries are empty 
if (empty($username) || empty($password)) {
  header("Location: ../login.php");
  exit;
}

$users = get_content("users");

// Check Username/password in users.json
foreach ($users as $user) {
  if ($user['username'] == $username && $user['password'] == crypt_password($password)) {
    $_SESSION["user"] = $user['username'];
    header("Location: ../index.php");
    exit;
  }
}

header("Location: ../login.php");
exit;
