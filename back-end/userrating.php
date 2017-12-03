<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $username = $_SESSION['username'];
  $movieid = $request->getParam('movieid');

  try { 
    $query = "SELECT * from Userratings where movieid=? AND username=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$movieid, $username]);
    $ratings = $stmt->fetch(PDO::FETCH_ASSOC);
    
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($ratings);

  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>