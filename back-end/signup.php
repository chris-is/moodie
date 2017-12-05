<?php
  require 'database.php';
  $db = getDB();
  $username = $request->getParam('username');
  $password = $request->getParam('password');
  $email = $request->getParam('email');

  try {
    //Add new user info into the database if they passed the username check
    $hashpass = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO Users (username, password, email) VALUES (?, ?, ?);";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $hashpass, $email]);
  } 

  //Print error messages if any
  catch(PDOException $e) {
    echo "Error while signing up.";
  }
?>