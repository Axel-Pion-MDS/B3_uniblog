<div>
  <h1>New Post</h1>
  <form method="GET" action="./controller/getData.php">
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" name="title" id="title" placeholder="My new post title" required>
    </div>
    <div class="form-group">
      <label for="author">Author</label>
      <input type="text" class="form-control" name="author" id="author" placeholder="Xx_DaRk_SaSuKe_xX" required>
    </div>
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" id="content" name="content" rows="3" placeholder="I'm the true darkness" required></textarea>
      <div class="form-group">
        <button type="submit" class="btn btn-outline-primary">Create</button>
      </div>
    </div>
  </form>
</div>