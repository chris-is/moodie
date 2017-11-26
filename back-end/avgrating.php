<?php
  $movieid = $request->getParam('movieid');

  try { 
    require_once('database.php');

    $query = "SELECT * from Movies where id='$movieid'";

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