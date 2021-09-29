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
  <title>Uniblog</title>
</head>
<body>
  <?php include('includes/header.php') ?>
  <a class="ml-4 btn btn-outline-danger mb-3 ml-1" href="index.php">Back home</a>
  <form method="POST" action="core/updatePost.php">
    <div class="form-group">
      <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" value="<?= $post['title'] ?>" required>
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" name="author" id="author" value="<?= $post['author'] ?>" required>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" id="content" name="content" rows="3" required><?= $post['content'] ?></textarea>
    </div>
    <div class="form-group">
      <figure>
        <img class="img-thumbnail" src="<?= $post['img'] ?>" alt="<?= $post['title'] ?>">
      </figure>
      <label for="img">Banner </label>
      <input type="url" class="form-control" name="img" id="img" value="<?= $post['img'] ?>" required>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-success">update article</button>
    </div>
  </form>
  <?php include('includes/footer.php') ?>
</body>
</html>