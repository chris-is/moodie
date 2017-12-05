<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];
  $about = $request->getParam('about');

  try { 
    //Update the user's "about" section to the one they just submitted
    $query = "UPDATE Users SET about=? WHERE sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$about, $sid]);

  } 
  catch(Exception $e) {
    echo "Error while updating about information.";
  }

?>