<?php
  require('config/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include('includes/head.php') ?>
  <title>Uniblog</title>
</head>
<body>
  <?php include('includes/header.php') ?>
  <h1>Uniblog</h1>
  <h1 class="text-center mt-5 mb-5"> Last articles</h1>
  <article class="flex-column text-center mt-5 ml-5 mr-5 pl-3 pb-3 pr-3 border border-success rounded">
      <h2> Name of article </h2>
      <h5 class="font-italic text-black-50"> Publied by name and date : </h5>
      <p class="mr-5 ml-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque minus temporibus est veritatis, vel harum exercitationem, neque deserunt debitis quisquam ex repudiandae minima ipsa aspernatur assumenda soluta quasi obcaecati sint.</p>
      <a class="btn btn-outline-primary" href=""> Read article </a>
  </article>
  <?php include('includes/footer.php') ?>
</body>
</html>

