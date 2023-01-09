<?php
require('../config/config.php');

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

// Gets the datas from the addPost.php form
$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$img = $_POST["img"];

$date = date_create();

$created_at = date_timestamp_get($date);
$updated_at = date_timestamp_get($date);

// Creates a new Post and adds each data inside that Post
$post = new Post();
$post->setTitle($title);
$post->setAuthor($author);
$post->setContent($content);
$post->setImg($img);
$post->setCreatedAt($created_at);
$post->setUpdatedAt($updated_at);

// Adds the post in the .json file
add_content($post, 'posts');

header("Location: ../index.php");
exit;
