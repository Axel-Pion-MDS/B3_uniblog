;<?php
  if(!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
  }
  require('config/config.php');

  $posts = get_content("posts");
  $data = $posts[0];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include('includes/head.php') ?>
  <title>Uniblog</title>
</head>
<body>
  <?php include('includes/header.php') ?>
  <article class="flex-column p-3 mx-4 border border-dark rounded mb-4">
    <h2><?= $data['title'] ?></h2>
    <p class="font-italic text-black-50"> Publied by <?= $data['author'] ?> and date : <?= $data['created_at'] ?> </p>
    <p><?= $data['content'] ?></p>
  </article>
  <?php include('includes/footer.php') ?>
</body>
</html>
