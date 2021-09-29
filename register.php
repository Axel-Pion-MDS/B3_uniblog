<?php
  require("config/config.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include('includes/head.php') ?>
  <title>Create account | Uniblog</title>
</head>
<body>
  <?php include('includes/header.php') ?>
  <div class="card-body col-4 mx-auto">
    <h2 class="mb-4">Create account</h2>
    <form action="core/registration.php" method="POST">
      <div class="form-group">
        <label for="username" class="text-success">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" id="username">
      </div>
      <div class="form-group">
        <label for="password" class="text-success" >Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" id="password">
      </div>
      <button class="btn btn-success m-auto" name="submit">Create account</button>
    </form>
  </div>
  <?php include('includes/footer.php') ?>
</body>
</html>