<?php
  require 'database.php';
  $db = getDB();
  $username = $request->getParam('username');
  $password = $request->getParam('password');
  $email = $request->getParam('email');

  try {
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO Users (username, password, email) VALUES (?, ?, ?);";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $hashpass, $email]);
  } 

  //Print error messages if any
  catch(PDOException $e) {
    echo json_encode($e->getMessage());
  }
?>