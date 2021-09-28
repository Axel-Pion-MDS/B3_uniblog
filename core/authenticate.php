<?php 
require("../config/config.php");
/* Check and assign submitted Username and Password to new variable */
$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';

/* Check Login form submitted */
if (isset($_POST['Submit'])){
  /* Define username and associated password array (will be in json file) */
  /* change it (just for test) */
  // $logins = array('quentin' => 'test','username1' => 'password1','username2' => 'password2');

  /* Check if some entries are empty*/ 
  if (empty($_POST['Username']) || empty($_POST['Password'])){
    header("Location: ../login.php");
    exit;
  }

  $users=get_content("users");
  /* Check Username/password in users.json*/
  foreach($users as $user){
    if ($user['username']=="$Username" && $user['password']==crypt_password($Password)){
      header("Location: ../index.php");
      exit;
    }
  }
}
header("Location: ../login.php");
exit;