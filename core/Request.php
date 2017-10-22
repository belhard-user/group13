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

    public static function isPost()
    {
        return $_SERVER['REQUEST_METHOD'] == 'POST';
    }

    public static function goBack()
    {
        $url = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/';
        header('Location: ' . $url);
    }
}