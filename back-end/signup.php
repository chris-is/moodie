<?php
  require 'database.php';
  $db = getDB();
  $username = $request->getParam('username');
  $password = $request->getParam('password');
  $email = $request->getParam('email');

  try {
    $query = "INSERT INTO Users (username, password, email) VALUES (?, ?, ?);";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $password, $email]);
  } 

  //Print error messages if any
  catch(PDOException $e) {
    echo json_encode($e->getMessage());
  }
?>