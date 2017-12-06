<?php
  require 'database.php';
  $db = getDB();
  $file = $request->getParam('file');
  $filepath = $request->getParam('filepath');

  try { 
    move_uploaded_file($file, $filepath); 
    echo $file;

  } 
  catch(Exception $e) {
    echo "Error while logging in.";
  }
?>