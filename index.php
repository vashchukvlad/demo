<?php

require 'functions.php';
require 'router.php';
require 'Database.php';


$db = new Database();

$post = $db->query('select * from posts;')->fetch(PDO::FETCH_ASSOC);

echo "<li>" . $post['title'] . "</li>";