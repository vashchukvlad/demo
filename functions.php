<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function isUri($uri)
{
    return $_SERVER['REQUEST_URI'] === $uri;
}

function abort($code=404)
{
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

function authorize($condition, $statusCode = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($statusCode);
    }
}