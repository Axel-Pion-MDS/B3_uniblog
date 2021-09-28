<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="index.php">Uniblog</a>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item <?= isActive("index.php") ?>">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <?php if (isset($_SESSION["user"])) { ?>
          <li class="nav-item <?= isActive("addPost.php") ?>">
            <a class="nav-link" href="addPost.php">New article</a>
          </li>
        <?php } ?>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php if (!isset($_SESSION["user"])) { ?>
          <li class="nav-item <?= isActive("login.php") ?>">
            <a class="btn btn-success my-2 my-sm-0 ml-1" href="login.php">Login</a>
          </li>
          <li class="nav-item <?= isActive("register.php") ?>">
            <a class="btn btn-primary my-2 my-sm-0 ml-1" href="register.php">Inscription</a>
          </li>
          <?php } else { ?>
            <li class="nav-item">
            <p class="btn btn-outline-light my-2 my-sm-0 mr-1">Welcome <span class="text-capitalize"><?= $_SESSION["user"] ?></span></p>
          </li>
          <li class="nav-item">
            <a class="btn btn-danger my-2 my-sm-0 ml-1" href="core/logout.php">Disconnect</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </nav>
</header>