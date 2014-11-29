<?php

// web/index.php
require_once __DIR__.'/../vendor/autoload.php';


$app = new Silex\Application();

$app->get('/', function () use ($app) {
    include __DIR__.'/../config/config.php';
    return include __DIR__ .'/../view/template.view.php';
});

$app->run();

