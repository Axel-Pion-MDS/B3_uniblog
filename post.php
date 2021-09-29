<?php
  require('config/config.php');
  
  // Check if id is pass in URL
  if (!isset($_GET['id'])) {
    header('Location: index.php');
    exit;
  }

  $posts = get_content("posts");
  $post = $posts[$_GET['id']];

  if (empty($post)) {
    header('Location: index.php');
    exit;
  }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <?php include('includes/head.php') ?>
  <title>Article | Uniblog</title>
</head>
<body>
  <?php include('includes/header.php') ?>
  <a class="ml-4 btn btn-outline-danger mb-3 ml-1" href="index.php">Back home</a>
  <a class="ml-4 btn btn-outline-warning mb-3 ml-1" href="postUpdate.php?id=<?= $_GET['id'] ?>">Update post</a>
  <article class="flex-column p-3 mx-4 border border-dark rounded mb-4">
    <figure>
      <img src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
    </figure>
    <h2><?= $post['title'] ?></h2>
    <p class="text-muted">By <a href="#"><?= $post['author'] ?></a> | <?= date('d M Y H:i', $post['created_at']) ?></p>
    <p><?= $post['content'] ?></p>
  </article>
  <?php include('includes/footer.php') ?>
</body>
</html>
