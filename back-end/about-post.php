<?php

  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];
  $about = $request->getParam('about');

  try { 
    $query = "UPDATE Users SET about=? WHERE sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$about, $sid]);

  } catch(Exception $e) {
    echo "Something went wrong!";
  }

?>