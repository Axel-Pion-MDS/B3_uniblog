<?php
	define('__ROOT__', realpath(dirname(__FILE__, 2)));
	include(__ROOT__ . "/config/config.php");

	/**
	 * Get data from blog post's creation and add it to
	 * .json file
	 */
	function addPost() {
		$title = $_GET["title"];
		$author = $_GET["author"];
		$content = $_GET["content"];
		$created_at = date('d-m-Y');
		$updated_at = date('d-m-Y');

		$post = new Post();
		$post->setTitle($title);
		$post->setAuthor($author);
		$post->setContent($content);
		$post->setCreatedAt($created_at);
		$post->setUpdatedAt($updated_at);
		
		add_content($post, 'posts');
	}

	if (isset($_GET['title'])) {
		addPost();
	}
?>