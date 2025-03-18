<?php

require 'functions.php';
require 'router.php';

// Connect to database.
$dsn = "sqlite:/home/vlad/projects/demo_php/demo_db";
 
// Tip: This should be wrapped in a try-catch. We'll learn how, soon.
$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts");
$statement->execute();

$post = $statement->fetch(PDO::FETCH_ASSOC);

echo "<li>" . $post['title'] . "</li>";