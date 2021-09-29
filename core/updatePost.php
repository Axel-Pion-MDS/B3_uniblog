<?php
require('../config/config.php');

$postId = $_POST['id'];

// Checks if the id of the post is correct
if (!isset($postId)) {
	header('Location: login.php');
	exit;
}

// Checks if user is logged
if (!isset($_SESSION["user"])) {
	header('Location: login.php');
	exit;
}

// Checks if something was sent in post method
if (empty($_POST)) {
	header('Location: ../addPost.php');
	exit;
}

// Checks if data is not empty
if (empty($_POST["title"]) || empty($_POST["author"]) || empty($_POST["content"]) || empty($_POST["img"])) {
	header('Location: ../addPost.php');
	exit;
}


// Gets the data from the .json file
$getData = get_content('posts');

// Gets the datas from the postUpdate.php form
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$img = $_POST["img"];

$date = date_create();

$updated_at = date_timestamp_get($date);

// Creates a new Post and adds each data inside that Post
$post = new Post();
$post->setTitle($title);
$post->setAuthor($author);
$post->setContent($content);
$post->setImg($img);
$post->setCreatedAt($getData[$postId]['created_at']);
$post->setUpdatedAt($updated_at);

// Updates the post with the new post at the correct id
update_content($postId, $post, 'posts');

header("Location: ../index.php");
exit;
