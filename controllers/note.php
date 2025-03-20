<?php

$db = new Database();

$heading = "My Note.";

$note = $db->query("SELECT * FROM notes WHERE id = :id;", ['id' => $_GET['id']])->fetch();

require "views/note.view.php";