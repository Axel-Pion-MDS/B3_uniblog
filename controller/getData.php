<?php
	define('__ROOT__', realpath(dirname(__FILE__, 2)));
	include(__ROOT__ . "/config/config.php");

	/* get blog's data*/
	/* Checks if the form is a _GET form and get the datas from it */

	if (isset($_GET['title'])) {
		$title = $_GET["title"];
		$author = $_GET["author"];
		$content = $_GET["content"];
		$created_at = $_GET["created_at"];
		$updated_at = $_GET["updated_at"];

		$post = new Post();
		$post->setTitle($title);
		$post->setAuthor($author);
		$post->setContent($content);
		$post->setCreatedAt($created_at);
		$post->setUpdatedAt($updated_at);
		
		add_content($post, 'posts');
		$test = get_content('posts');
	}
?>