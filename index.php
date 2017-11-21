<?php
  require __DIR__ . '/vendor/autoload.php';

  $settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App($settings);

  require __DIR__ . '/back-end/login-signup.php';

  $id = "m00d1" . uniqid();
  session_id($id);
  echo session_id();
  session_start();

  header("Location: /COMP307/front-end/html/index.php"); 
  exit();
  $app->run();
?>



  


