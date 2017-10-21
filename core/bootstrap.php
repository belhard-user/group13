<?php
use Philo\Blade\Blade;

require_once 'vendor/autoload.php';

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';


$blade = new Blade($views, $cache);

\Core\App::set('engine', $blade);