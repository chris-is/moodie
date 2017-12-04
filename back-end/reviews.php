<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];

  try { 
    //ADD COMMENTS!
    $query = "SELECT * from Users where sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $username = $user['username'];

    $query = "SELECT movieid FROM Userratings WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    $ratings = $stmt->fetchAll();

    print_r($ratings);
    
    //$ratings2 = json_encode($ratings);
    /*foreach($ratings as $v) {

      foreach($v as $x)
      {
        $query2 = "SELECT moviename FROM Movies WHERE movieid='$x'";

        $result2 = $mysqli->query($query2);
        while ($row = $result2->fetch_assoc()){
        $names[] = $row;
        $json2 = json_encode($names);
        $newline="<br>";
        $message = substr($json2, 15, -3);
        $finalMessage = $message . $newline;
        echo $finalMessage;
        }

      }
      //$movieid = substr($json, 12, -2);
    }*/

  } 
  catch(Exception $e) {
    echo "Error while getting user reviews.";
  }


?>