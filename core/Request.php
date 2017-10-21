<?php
class Request
{
    public static function getUri()
    {
        $path = trim($_SERVER['REQUEST_URI'], '/');

        return $path;
    }
}