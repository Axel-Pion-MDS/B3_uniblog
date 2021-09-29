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

// Updates the post with the new post at the correct id
delete_content($postId, $post, 'posts');

header("Location: ../index.php");
exit;
