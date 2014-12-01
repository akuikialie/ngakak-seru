<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';


$app = new Silex\Application();
$app['view'] = new League\Plates\Engine(__DIR__ . '/../view/scripts', 'phtml');

$app->get('/', function () use ($app) {
    include __DIR__.'/../config/config.php';
    return include __DIR__ .'/../view/template.view.php';
});

$app->get('/about', 'NgakakSeru\\Controller\\About::dispatch');
$app->get('/contact', 'NgakakSeru\\Controller\\Contact::dispatch');

$app->run();

