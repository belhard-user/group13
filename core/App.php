<?php
namespace Core;


class App
{
    protected static $config = [];

    public static function set($key, $value)
    {
        static::$config[$key]  = $value;
    }

    public static function get($key)
    {
        return array_key_exists($key, static::$config) ? static::$config[$key] : '';
    }
}