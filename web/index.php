<?php
session_start();
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['config'] = include __DIR__.'/../config/config.php';
$app['view'] = new League\Plates\Engine(__DIR__ . '/../view/scripts', 'phtml');
$app['database'] = NgakakSeru\Database\Connection::getConnection(include __DIR__ . '/../config/database.php');

// Enable PHP Error level
error_reporting(E_ALL);
ini_set('display_errors','On');

// Enable debug mode
$app['debug'] = true;

// Handle fatal errors



$app->get('/', 'NgakakSeru\\Controller\\Home::index');
$app->get('/about', 'NgakakSeru\\Controller\\About::dispatch');
$app->get('/contact', 'NgakakSeru\\Controller\\Contact::dispatch');
$app->get('/auth/register', 'NgakakSeru\\Controller\\Auth::register');
$app->get('/auth/login', 'NgakakSeru\\Controller\\Auth::login');
$app->get('/auth', 'NgakakSeru\\Controller\\Auth::index');
$app->get('/dashboard/uploadpicture', 'NgakakSeru\\Controller\\Dashboard::uploadPicture');
$app->get('/dashboard/history', 'NgakakSeru\\Controller\\Dashboard::History');
$app->get('/dashboard/uploadpicturedo', 'NgakakSeru\\Controller\\Dashboard::uploadPicture_do');

$app->run();

