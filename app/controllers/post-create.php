<?php

require_once CORE . '/classes/Validator.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $fillable = ['title', 'excerpt', 'content'];

    $data = load($fillable);

    $validator = new Validator();
    $validation = $validator->validate($data, [
        'title' => [
            'required' => true,
            'min' => 5,
            'max' => 255,
        ],
        'excerpt' => [
            'required' => true,
            'min' => 10,
            'max' => 255,
        ],
        'content' => [
            'required' => true,
            'min' => 100,
        ],
    ]);

    var_dump($validation->has_errors());    

    die;

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