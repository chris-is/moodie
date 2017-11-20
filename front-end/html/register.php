<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();


  $app->post('/', function ($request, $response) {
    $username = $request->getParam('username');
    $password = $request->getParam('password');
    $email = $request->getParam('email');

    //Insert username and password into database
    $insert = "INSERT INTO Users (username, password, email) VALUES ('$username', '$password', '$email');";
    $db = getDB();
    $stmt = $db->query($insert); 

    //Call function to print database
    //$response = printdb($db);
    //echo $response;
});

  
  $app->run();

  function getDB() {
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="9pUPOCULo7"; //Password should be changed if set
  $dbname="Store";
  $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
  $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbConnection;
}
?>