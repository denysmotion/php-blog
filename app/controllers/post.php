<?php 

$id = $_GET['id'] ?? 0;
$post = $db->query("SELECT * FROM posts WHERE id={$id} LIMIT 1")->findOrFail();

$title = $post['title'];

require_once VIEWS . '/post.tpl.php';