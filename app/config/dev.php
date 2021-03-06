<?php

// include the prod configuration
require __DIR__.'/prod.php';

// enable the debug mode
$app['debug'] = true;

// Doctrine (db)
$app['db.options'] = array(
    'driver'   => 'pdo_mysql',
    'charset'  => 'utf8',
    'host'     => '127.0.0.1',
    'port'     => '3306',
    'dbname'   => 'mymovies',
    'user'     => 'mymovies_user',
    'password' => 'secret',
);

// enable the debug mode
$app['debug'] = true;