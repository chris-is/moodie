<?php
  require __DIR__ . '/vendor/autoload.php';

  $settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App($settings);

  require __DIR__ . '/back-end/login-signup.php';

  $id = "m00d1" . uniqid();
  session_id($id);
  echo session_id();
  session_start();

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

  header("Location: /COMP307/front-end/html/index.php"); 
  exit();
  $app->run();
?>



  


