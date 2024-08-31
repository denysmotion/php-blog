<?php

function dump($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

function dd($data) {
    dump($data);
    die;
}

function abort($code = 404) {
    http_response_code(404);
    require VIEWS . "/errors/{$code}.tpl.php";
    die;
}

function load($fillable = [])
{
    $data = [];
    foreach ($_POST as $k => $v) {
        if (in_array($k, $fillable)) {
            $data[$k] = $v;
        }
    }
    return $data;
}

function old($fieldname)
{
    return isset($_POST[$fieldname]) ? $_POST[$fieldname] : '';
}
