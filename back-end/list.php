<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];
  $list = $request->getParam('list');

  try { 
    //Update the user's "list" section to the one they just submitted
    $query = "UPDATE Users SET list=? WHERE sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$list, $sid]);

  } 
  catch(Exception $e) {
    echo "Error while updating about information.";
  }

?>