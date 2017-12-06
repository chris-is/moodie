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
$app->post('/dp', function($request) {
  require 'about-dp.php';
});
$app->post('/find', function($request, $response) {
  require 'find.php';
});

//User authentification
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

//Movie rating
$app->post('/avgrating', function ($request, $response) {
  require 'avgrating.php'; 
});
$app->post('/userrating', function ($request, $response) {
  require 'userrating.php'; 
});
$app->post('/updaterating', function ($request, $response) {
  require 'updaterating.php'; 
});

//Retrieving user ratings
$app->get('/reviews', function($request, $response) {
  require 'reviews.php';
});

//Update user list
$app->post('/list', function($request, $response) {
  require 'list.php';
});

//Get user list

$app->get('/list-get', function($request, $response) {
  require 'list-get.php';
});
//Recommendations
$app->get('/recommendations', function($request, $response) {
  require 'recommendations.php';
});
//Featured
$app->get('/featured', function($request, $response) {
  require 'featured.php';
});

//Search algorithm
$app->post('/search-advanced', function($request, $response) {
  require 'search-advanced.php';
});


$app->run();
?>