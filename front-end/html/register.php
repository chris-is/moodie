<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();


  $app->post('/', function ($request, $response) {
    $username = $request->getParam('username');
    $password = $request->getParam('password');

    $select = "SELECT * FROM Users";
    try {
      $db = getDB();
      $stmt = $db->query($select); 
      $result = $stmt->fetchAll(PDO::FETCH_OBJ);
      $db = null;
      echo $result->username;
      echo $result->password;
    } 

    //Print error messages if any
    catch(PDOException $e) {
      echo json_encode($e->getMessage());
    }
    
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