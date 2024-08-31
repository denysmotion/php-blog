<?php 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fillable = ['title', 'excerpt', 'content'];

    $data = load($fillable);

    $errors = [];
    if (empty($data['title'])) {
        $errors['title'] = 'Title is required';
    }

    if (empty($data['excerpt'])) {
        $errors['excerpt'] = 'Exerpt is required';
    }

    if (empty($data['content'])) {
        $errors['content'] = 'Content is required';
    }

    if (empty($errors)) {
        if ($db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data)) {
           echo 'OK'; 
        } else {
            echo 'DB Error';
        }
        
        //redirect('/posts/create');
    }

    
}

$title = 'New post';

require_once VIEWS . '/post-create.tpl.php';