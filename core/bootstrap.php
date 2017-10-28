<?php
use Core\App;
use Core\DB\DBConnector;
use Philo\Blade\Blade;

require_once 'vendor/autoload.php';

$config = require_once "config/app.php";

$views = __DIR__ . '/../views';
$cache = __DIR__ . '/../cache';


$blade = new Blade($views, $cache);

App::set('engine', $blade);
$dbConnector = new DBConnector($config['database']);
$queryBuilder = new \Core\DB\QueryBuilder($dbConnector->getDb());
App::set('queryBuilder', $queryBuilder);
App::set('config', $config);