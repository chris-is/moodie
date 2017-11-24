<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();

  $app->post('/', function ($request, $response) {
    $username = $request->getParam('username');
    $password = $request->getParam('password');
    $email = $request->getParam('email');
    
    try {
      require_once('database.php');

      $query = "INSERT INTO Users (username, password, email) VALUES ('$username', '$password', '$email');";

      $result = $mysqli->query($query);

    } 

    //Print error messages if any
    catch(PDOException $e) {
      echo json_encode($e->getMessage());
    }
    
  });

  $app->run();

?>

