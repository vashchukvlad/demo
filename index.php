<?php

$books = [
    [
        'title' => 'The Adventures of Tom Sawyer',
        'author' => 'Mark Twain',
        'price' => 200
    ],
    [
        'title' => 'The Adventures of Sherlock Holmes',
        'author' => 'Arthur Conan Doyle',
        'price' => 250
    ],
    [
        'title' => 'The Adventures of Huckleberry Finn',
        'author' => 'Mark Twain',
        'price' => 300
    ]
];


$filteredBooks = array_filter($books, function($book) {
    return $book['price'] > 200;
});


require "index.view.php";