<?php
require("../config/config.php");

// Check if something was sent in post method
if (empty($_POST)) {
  header("Location: ../register.php");
  exit;
}

$username = $_POST['username'];
$password = $_POST['password'];

// Check if entries are empty 
if (empty($username) || empty($password)) {
  header("Location: ../register.php");
  exit;
}

$date = date_create();

$created_at = date_timestamp_get($date);
$updated_at = date_timestamp_get($date);

$user = new User();
$user->setUsername($username);
$user->setPassword(crypt_password($password));
$user->setCreatedAt($created_at);
$user->setUpdatedAt($updated_at);

add_content($user,"users");

$_SESSION["user"] = $user->getUsername();

header("Location: ../index.php");
exit;