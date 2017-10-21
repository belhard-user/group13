<?php

$router->add('', 'Page@index');
$router->add('table', 'Page@table');
$router->add('about', 'Page@about');
$router->add('about/phone', 'Contact@index');