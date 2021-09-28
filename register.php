<?php
  require("config/config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Uniblog</title>
</head>
<body>
  <?php
  include 'includes/header.php';
  ?>
  <div class="card-body">
  <form action="core/registration.php" method="post" name="Login_Form">
    <div class="form-group">
      <label for="exampleInputEmail1" class="text-success">New Username</label>
        <input type="text" name="Username" class="form-control" placeholder="Username">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="text-success" >New Password</label>
        <input type="password" name="Password" class="form-control" placeholder="Password">
    </div>
      <button class="btn btn-success m-auto" name="Submit"> Connect</button>
  </form>
</div>
</body>
</html>