<?php 

$title = "About";

$post = "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt eos architecto, quidem eum cum provident magnam sit exercitationem vero amet beatae. Ut harum blanditiis vitae neque deleniti! Ullam, voluptate unde?</p>
                <p>Voluptatem eveniet deleniti error eum natus accusantium, expedita debitis dolore temporibus earum asperiores dicta, nobis dignissimos esse mollitia. Iste accusamus eos eveniet hic quae id neque aliquam quam quas. Commodi.</p>
                <p>Dicta architecto velit veritatis facilis tempora blanditiis, odio molestias, iste, corrupti esse enim fugit ullam. Necessitatibus eveniet ut aut ducimus. Asperiores possimus eos dicta, tempore necessitatibus cum tempora excepturi fugit.</p>";

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 3")->findAll();

require_once '../app/views/about.tpl.php';
