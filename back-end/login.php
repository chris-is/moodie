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
    

    if ($userdata['password'] == $userpass) {
      $status = 1;
      $id = uniqid();
      session_id($id);
      session_start();
      $_SESSION['sid'] = $id;

      $query = "UPDATE Users SET sid=?, status=? WHERE username=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$id, $status, $userlogin]);

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