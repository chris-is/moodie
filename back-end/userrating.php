<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];
  $movieid = $request->getParam('movieid');

  try { 
    //Get username from SID
    $query = "SELECT * from Users where sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $username = $user['username'];

    //Return the user's ratings for this particular movie
    $query = "SELECT * from Userratings where movieid=? AND username=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$movieid, $username]);
    $ratings = $stmt->fetch(PDO::FETCH_ASSOC);
    
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($ratings);

  } 
  catch(Exception $e) {
    echo "Error while displaying user ratings.";
  }


?>