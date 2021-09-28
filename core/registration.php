<?php
  require("../config/config.php");
  /* Check Login form submitted */
  if ( isset( $_POST['Submit'] ) ) {
    /* Check if some entries are empty*/ 
    if (empty($_POST['Username']) || empty($_POST['Password'])){
      header("Location: ../register.php");
      exit;
    }
    /* assign Usernames and Passwords to variables*/
    $username = isset($_POST['Username']) ? $_POST['Username'] : '';
    $password = isset($_POST['Password']) ? $_POST['Password'] : '';

    $user = new User();
    $user->setUsername("$username");
    $user->setPassword(crypt_password($password));
    $user->setCreatedAt(date("m-d-Y"));
    $user->setUpdatedAt(date("m-d-Y"));
    add_content($user,users);
  }
  header("Location: ../index.php");
  exit;