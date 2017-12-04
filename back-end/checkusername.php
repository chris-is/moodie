<?php
  require 'database.php';
  $db = getDB();
  $username = $request->getParam('username');
  
  try { 
    //Get all rows with username matching the one being used to sign up
    $query = "SELECT * FROM Users WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    $result = $stmt->fetchAll();

    //If the username already exists, return message
    if (count($result) > 0){ 
      echo "existing";
    } 
    else {
      //If the username doesn't match set parameters, return message
      if (!preg_match('/^[a-zA-Z0-9]{4,16}$/i', $username)){
        echo "param";
      }
      //If the username is available, return message
      else {
        echo "ok";
      }
    }
    
  } catch(Exception $e) {
    echo "Error while checking username availability.";
  }
?>