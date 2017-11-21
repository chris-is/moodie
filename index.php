<?php
  require __DIR__ . '/vendor/autoload.php';

  $settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App($settings);

  
  session_start();

  header("Location: /COMP307/front-end/html/index.php"); 
  exit();
  $app->run();
?>



  


