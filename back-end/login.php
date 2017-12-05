<?php
  require 'database.php';
  $db = getDB();
  $userlogin = $request->getParam('username');
  $userpass = $request->getParam('password');

  try { 
    //Get the user information matching the provided username
    $query = "SELECT * from Users where username=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userlogin]);
    $userdata = $stmt->fetch(PDO::FETCH_ASSOC);
    $hashpass = $userdata['password'];
    
    //Check if the provided username and password belong to the same user
    if (password_verify($userpass, $hashpass)) {
      $status = 1;
      $sid = uniqid();
      session_id($sid);
      session_start();
      $_SESSION['sid'] = $sid;

      //If the username and password match, update that row's SID and status values to confirm the user's login status
      $query = "UPDATE Users SET sid=?, status=? WHERE username=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$sid, $status, $userlogin]);

      echo "ok";
    }
    else {
      echo "nope";
    }

  } 
  catch(Exception $e) {
    echo "Error while logging in.";
  }
?>