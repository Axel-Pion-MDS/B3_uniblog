<?php
  $current_file = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
  function isActive($file) {
    return $current_file == $file ? 'active' : '';
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="index.php">Uniblog</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item <?php isActive("index.php") ?>">
        <a class="nav-link" href="../index.php">Accueil</a>
      </li>
      <li class="nav-item <?php isActive("blog.php") ?>">
        <a class="nav-link" href="#">Blog</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php isActive("login.php") ?>">
        <a class="btn btn-outline-success my-2 my-sm-0 ml-1" href="login.php">Login</a>
      </li>
      <li class="nav-item <?php isActive("register.php") ?>">
        <a class="btn btn-outline-primary my-2 my-sm-0 ml-1" href="register.php">Inscription</a>
      </li>
    </ul>
  </div>
</nav>