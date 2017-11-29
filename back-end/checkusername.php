<?php
  $username = $request->getParam('username');
  
  try { 
    require_once('database.php');
    $query = "SELECT * FROM Users WHERE username = '$username'";
    $result = $mysqli->query($query);    

    if (count($result->fetch_assoc()) > 0){ 
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