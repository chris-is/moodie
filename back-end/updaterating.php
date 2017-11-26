<?php
  try { 
    require_once('database.php');
    session_start();
    //$sid = $_SESSION['sid'];
    $username = $_SESSION['username'];
    $movieid = $request->getParam('movieid');

    //$query = "CREATE UNIQUE INDEX ux ON Userratings (username, movieid)";
    $result = $mysqli->query($query);

    $query = "INSERT INTO Userratings (username, movieid) VALUES($username, $movieid) ON DUPLICATE KEY UPDATE    
username='$username', movieid='$movieid'";
    $result = $mysqli->query($query);

    $happy = $request->getParam('happy');
    if($happy!=0){
      $query = "UPDATE Userratings SET happy='$happy' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }
  
    $angry = $request->getParam('angry');
    if($angry!=0){
      $query = "UPDATE Userratings SET angry='$angry' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $smart = $request->getParam('smart');
    if($smart!=0){
      $query = "UPDATE Userratings SET smart='$smart' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $excited = $request->getParam('excited');
    if($excited!=0){
      $query = "UPDATE Userratings SET excited='$excited' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $relaxed = $request->getParam('relaxed');
    if($relaxed!=0){
      $query = "UPDATE Userratings SET relaxed='$relaxed' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $shocked = $request->getParam('shocked');
    if($shocked!=0){
      $query = "UPDATE Userratings SET shocked='$shocked' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $scared = $request->getParam('scared');
    if($scared!=0){
      $query = "UPDATE Userratings SET scared='$scared' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $sad = $request->getParam('sad');
    if($sad!=0){
      $query = "UPDATE Userratings SET sad='$sad' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $hungry = $request->getParam('hungry');
    if($hungry!=0){
      $query = "UPDATE Userratings SET hungry='$hungry' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    $bored = $request->getParam('bored');
    if($bored!=0){
      $query = "UPDATE Userratings SET bored='$bored' WHERE username='$username' AND movieid='$movieid'";
      $result = $mysqli->query($query);
    }

    echo "ok";

  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>