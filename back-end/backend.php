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

$app->post('/logout', function ($request, $response) {
  require 'logout.php'; 
});

$app->post('/avgrating', function ($request, $response) {
  require 'avgrating.php'; 
});

$app->post('/userrating', function ($request, $response) {
  require 'userrating.php'; 
});

$app->post('/updaterating', function ($request, $response) {
  require 'updaterating.php'; 
});
//For retrieving user ratings
$app->get('/reviews', function($request, $response) {
  require 'reviews.php';
});

//For recommendations
$app->get('/recommendations', function($request, $response) {
  require 'recommendations.php';
});

$app->run();
?>