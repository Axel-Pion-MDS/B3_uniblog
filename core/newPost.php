<?php
require('../config/config.php');

// Check if user is logged
if (!isset($_SESSION["user"])) {
	header('Location: login.php');
	exit;
}

// Check if something was sent in post method
if (empty($_POST)) {
	header('Location: ../addPost.php');
	exit;
}

// Check if data is not empty
if (empty($_POST["title"]) || empty($_POST["author"]) || empty($_POST["content"]) || empty($_POST["img"])) {
	header('Location: ../addPost.php');
	exit;
}

/**
 * Get blog's data
 * Checks if the form is a _GET form and get the datas from it
 */

$title = $_POST["title"];
$author = $_POST["author"];
$content = $_POST["content"];
$img = $_POST["img"];

$date = date_create();

$created_at = date_timestamp_get($date);
$updated_at = date_timestamp_get($date);

$post = new Post();
$post->setTitle($title);
$post->setAuthor($author);
$post->setContent($content);
$post->setImg($img);
$post->setCreatedAt($created_at);
$post->setUpdatedAt($updated_at);

add_content($post, 'posts');

header("Location: ../index.php");
exit;
