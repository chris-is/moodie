<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];

  try { 
    //Reset that user's SID and login status in the database
    $query = "UPDATE Users SET sid=0, status=0 WHERE sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);

    $_SESSION['sid'] = 0;
    unset($_SESSION);

    echo "ok";
  }
  catch(Exception $e) {
    echo "Error while logging out.";
  }

?>