<?php
  require 'database.php';
  $db = getDB();
  $username = $request->getParam('username');
  
  try { 
    $query = "SELECT * FROM Users WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    $result = $stmt->fetchAll();

    if (count($result) > 0){ 
      echo "existing";
    } 
    else {
      if (!preg_match('/^[a-zA-Z0-9]{4,16}$/i', $username)){
        echo "param";
      }
      else {
        echo "ok";
      }
    }
    
  } catch(Exception $e) {
    echo "Something went wrong!";
  }
?>