<?php
  $username = $request->getParam('username');
  $password = $request->getParam('password');
  $email = $request->getParam('email');

  try {
    require_once('database.php');

    $query = "INSERT INTO Users (username, password, email) VALUES ('$username', '$password', '$email');";

    $result = $mysqli->query($query);
  } 

  //Print error messages if any
  catch(PDOException $e) {
    echo json_encode($e->getMessage());
  }
?>