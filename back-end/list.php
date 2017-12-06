<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];
  $list = $request->getParam('list');
  $user = $request->getParam('user');

  try { 
    //Update the user's "list" section to the one they just submitted
    $query = "UPDATE Users SET list=? WHERE username=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$list, $user]);

  } 
  catch(Exception $e) {
    echo "Error while updating about information.";
  }

?>