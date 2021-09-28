<?php
  require('config/config.php');
  $posts = get_content("posts");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include('includes/head.php') ?>
  <title>Uniblog</title>
</head>
<body>
  <?php include('includes/header.php') ?>
  <h1 class="my-3 ml-3">Last articles</h1>
  <div class="row mx-3">
    <?php foreach ($posts as $key => $post) { ?>
      <article class="flex-column p-3 mx-4 border border-dark rounded col-3 mb-3">
        <h2><?= $post['title'] ?></h2>
        <p class="font-italic text-black-50"> Publied by <?= $post['author'] ?> and date : <?= $post['created_at'] ?> </p>
        <p><?= substr($post['content'],0,200) . '...' ?></p>
        <a class="btn btn-outline-primary" href="post.php?id=<?= $key ?>">Read article</a>
      </article>
    <?php } ?>
  </div>
  <?php include('includes/footer.php') ?>
</body>
</html>
