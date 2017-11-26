<?php
  try { 
    require_once('database.php');
    session_start();
    //$sid = $_SESSION['sid'];
    $username = $_SESSION['username'];
    //$movieid = $request->getParam('movieid');
    $query = "SELECT movieid FROM Userratings WHERE username = '$username'";

    $result = $mysqli->query($query);

    while ($row = $result->fetch_assoc()){
      $ratings[] = $row;
    }
    
    echo $ratings[0];
    foreach($ratings as $v) {

      $json = json_encode($v);
      //echo $json;
      $movieid = substr($json, 12, -2);

      $query2 = "SELECT moviename FROM Movies WHERE movieid='1234'";

      $result2 = $mysqli->query($query2);
      while ($row = $result2->fetch_assoc()){
      $names[] = $row;
      }

      $json2 = json_encode($names);
      $newline="<br>";
      $message = substr($json2, 10, -3);
      $finalMessage = $message . $newline;
      //echo $finalMessage;
    }

  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>