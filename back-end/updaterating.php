<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $movieid = $request->getParam('movieid');

  try { 
    //Get username from the current SID
    $sid = $_SESSION['sid'];
    $query = "SELECT * from Users where sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $username = $user['username'];

    //Check if user has rated this particular movie
    $query = "SELECT * FROM Userratings WHERE username=? AND movieid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username, $movieid]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    //If user has never rated this movie, insert a row for them
    if(count($result) == 1){
      $query = "INSERT INTO Userratings(username, movieid) VALUES (?, ?)";
      $stmt = $db->prepare($query);
      $stmt->execute([$username, $movieid]);
    }

    //Then update whichever mood they gave a rating for
    $happy = $request->getParam('happy');
    if($happy!=0){
      $query = "UPDATE Userratings SET happy=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$happy, $username, $movieid]);
    }
  
    $angry = $request->getParam('angry');
    if($angry!=0){
      $query = "UPDATE Userratings SET angry=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$angry, $username, $movieid]);
    }

    $smart = $request->getParam('smart');
    if($smart!=0){
      $query = "UPDATE Userratings SET smart=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$smart, $username, $movieid]);
    }

    $excited = $request->getParam('excited');
    if($excited!=0){
      $query = "UPDATE Userratings SET excited=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$excited, $username, $movieid]);
    }

    $relaxed = $request->getParam('relaxed');
    if($relaxed!=0){
      $query = "UPDATE Userratings SET relaxed=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$relaxed, $username, $movieid]);
    }

    $shocked = $request->getParam('shocked');
    if($shocked!=0){
      $query = "UPDATE Userratings SET shocked=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$shocked, $username, $movieid]);
    }

    $scared = $request->getParam('scared');
    if($scared!=0){
      $query = "UPDATE Userratings SET scared=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$scared, $username, $movieid]);
    }

    $sad = $request->getParam('sad');
    if($sad!=0){
      $query = "UPDATE Userratings SET sad=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$sad, $username, $movieid]);
    }

    $hungry = $request->getParam('hungry');
    if($hungry!=0){
      $query = "UPDATE Userratings SET hungry=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$hungry, $username, $movieid]);
    }

    $bored = $request->getParam('bored');
    if($bored!=0){
      $query = "UPDATE Userratings SET bored=? WHERE username=? AND movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$bored, $username, $movieid]);
    }

    echo "ok";

  } 
  catch(Exception $e) {
    echo "Error while updating user ratings.";
  }


?>