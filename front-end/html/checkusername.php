<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();

  $app->post('/', function ($request, $response) {
    $username = $request->getParam('username');
    
    try { 
      require_once('database.php');
      $query = "SELECT * FROM Users WHERE username = '$username'";
      $result = $mysqli->query($query);    

      if (count($result->fetch_assoc()) > 0){ 
        echo "0";
      } 
      else {
        echo "1";
      }
      
    } catch(Exception $e) {
      echo "Something went wrong!";
    }

  });
  
  $app->run();
?>