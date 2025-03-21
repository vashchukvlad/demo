<?php

$db = new Database();

$heading = "My Notes.";

$notes = $db->query("SELECT * FROM notes;")->fetchAll();

require "views/notes.view.php";