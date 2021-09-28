<?php
  require("config/config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include('includes/head.php') ?>
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
<?php include('includes/footer.php') ?>
</body>
</html>