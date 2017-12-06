<?php
  require 'database.php';
  $db = getDB();
  $tofind = $request->getParam('tofind');

  try { 
    //Check if user exists in database
    $query = "SELECT * from Users where username=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$tofind]);

    if($stmt->rowCount() == 0){
      echo 0;
    }
    else {
      echo 1;
    }

  } 
  catch(Exception $e) {
    echo "Error while displaying user ratings.";
  }


?>