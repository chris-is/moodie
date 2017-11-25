<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';

$app = new \Slim\App;

//Creating new records with the fields from html form
$app->post('/about', function ($request) {
	require 'about-post.php';
});

$app->get('/about', function ($request) {
	require 'about-get.php';
});

$app->post('/checkusername', function ($request, $response) {
  require 'checkusername.php';
});

$app->post('/signup', function ($request, $response) {
	require 'signup.php';
});

$app->post('/login', function ($request, $response) {
  require 'login.php'; 
});

$app->run();
?>