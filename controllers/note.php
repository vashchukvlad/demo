<?php

$db = new Database();

$heading = "My Note.";
$currentUserId = 1;

$note = $db->query("SELECT * FROM notes WHERE id = :id;", ['id' => $_GET['id']])->findOrAbort();

if (! $note) {
    abort(404);
}

authorize($note['user_id'] === $currentUserId);

require "views/note.view.php";