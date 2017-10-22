<?php
namespace Core;

class Request
{
    public static function getUri()
    {
        $path = trim($_SERVER['REQUEST_URI'], '/');
        $path = parse_url($path, PHP_URL_PATH);

        return $path;
    }
}