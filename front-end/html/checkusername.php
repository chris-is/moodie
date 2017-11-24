<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();

  $app->post('/', function ($request, $response) {
    $username = $request->getParam('username');
    
    try { 
      require_once('db.php');
      $query = "SELECT * FROM Users WHERE username = '$username'";
      $result = $mysqli->query($query);     

      if (mysql_num_rows($result) > 1){ 
        echo "0";
      } 
      else {
        echo "1";
      }
      
    } catch(Exception $e) {
      echo "Something went wrong!";
    }

  });
  

?>