<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();

  $app->post('/', function ($request, $response) {
    $userlogin = $request->getParam('username');
    $userpass = $request->getParam('password');
    echo "here";
    
    try {
      require_once('database.php');
      $query = "SELECT `username`, `password` FROM `Users` where userID='$username'";

      $result = $mysqli->query($query);

      $query="SELECT * from `Users` where name='$_GET[userlogin]' and password='$_GET[userpass]'";
      $result=mysql_query($sql,$conn) or die(mysql_error());

      echo $result;
    } 

    //Print error messages if any
    catch(PDOException $e) {
      echo json_encode($e->getMessage());
    }
    
  });

  /*$id = "m00d13" . uniqid();
  session_id($id);
  echo session_id();
  session_start();*/

  $app->run();


?>