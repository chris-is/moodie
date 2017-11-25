<?php
  $userlogin = $request->getParam('username');
  $userpass = $request->getParam('password');

  try { 
    require_once('database.php');

    $query = "SELECT * from Users where username='$userlogin'";

    $result = $mysqli->query($query);

    while ($row = $result->fetch_assoc()){
      $userdata[] = $row;
    }
    if ($userdata[0]['password'] == $userpass) {
      $id = uniqid();
      session_id($id);
      session_start();
      $_SESSION['sid'] = $id;
      $query = "UPDATE Users SET sid='$id', status=1 WHERE username='$userlogin'";
      $result = $mysqli->query($query);
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