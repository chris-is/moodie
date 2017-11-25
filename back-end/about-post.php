<?php

try { 
  require_once('database.php');
  session_start();
  $sid = $_SESSION['sid'];

  $about = $request->getParam('about');
  $query = "UPDATE Users SET about='$about' WHERE sid='$sid'";
  $result = $mysqli->query($query);  

} catch(Exception $e) {
  echo "Something went wrong!";
}

?>