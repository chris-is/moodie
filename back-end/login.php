<?php
  require 'database.php';
  $db = getDB();
  $userlogin = $request->getParam('username');
  $userpass = $request->getParam('password');

  try { 
    $query = "SELECT * from Users where username=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$userlogin]);
    $userdata = $stmt->fetch(PDO::FETCH_ASSOC);
    $hashpass = $userdata['password'];
    
    if (password_verify($userpass, $hashpass)) {
      $status = 1;
      $sid = uniqid();
      session_id($sid);
      session_start();
      $_SESSION['sid'] = $sid;

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
    echo "Something went wrong!";
  }
?>