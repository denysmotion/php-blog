<?php

use ffrm\Validator;

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
            'min' => 10,
        ],
    ]);

    if (!$validation->has_errors()) {
        if ($db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", $data)) {
            $_SESSION['success'] = 'Ok';
        } else {
            $_SESSION['error'] = 'Db error';
        }
        redirect();
    }

}

$title = 'New post';

require_once VIEWS . '/post-create.tpl.php';