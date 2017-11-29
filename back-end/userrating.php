<?php
  try { 
    require_once('database.php');
    session_start();
    //$sid = $_SESSION['sid'];
    $username = $_SESSION['username'];
    $movieid = $request->getParam('movieid');

    $query = "SELECT * from Userratings where movieid='$movieid' AND username='$username'";

    $result = $mysqli->query($query);

    while ($row = $result->fetch_assoc()){
      $ratings[] = $row;
    }
    
    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($ratings);

  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>