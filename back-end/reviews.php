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

    $length = $stmt->rowCount();
    $detail = array();
    for($i=0; $i<$length; $i++) {
      $id = $ratings[$i]['movieid'];

      $apiurl = "https://api.themoviedb.org/3/movie/";
      $apiurl .= $id;
      $apiurl .= "?api_key=1753a8a0eee9f02ab07f902370f8f1ea";

      $jsonStr = @file_get_contents($apiurl);
      //If it's not a movie but a TV show, change the API request URL
      if($jsonStr === false){
        $detail[$i][0] = "movie=0&tv=" . $id;
        $apiurl = "https://api.themoviedb.org/3/tv/";
        $apiurl .= $id;
        $apiurl .= "?api_key=1753a8a0eee9f02ab07f902370f8f1ea";
        $jsonStr = @file_get_contents($apiurl);
        $jsonObj = json_decode($jsonStr);
        $detail[$i][1] = $jsonObj->title;
      }
      else{
        $jsonObj = json_decode($jsonStr);
        $detail[$i][1] = $jsonObj->title;
        $detail[$i][0] = "movie=" . $id . "&tv=0";
      }

    }

    //print_r($detail);

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($detail);

    //print_r($ratings);
    
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