<?php
  try { 
    require_once('database.php');
    session_start();
    //$sid = $_SESSION['sid'];
    $username = $_SESSION['username'];
    $movieid = $request->getParam('movieid');
    $happy = $request->getParam('happy');
    $angry = $request->getParam('angry');
    $smart = $request->getParam('smart');
    $excited = $request->getParam('excited');
    $relaxed = $request->getParam('relaxed');
    $shocked = $request->getParam('shocked');
    $scared = $request->getParam('scared');
    $sad = $request->getParam('sad');
    $hungry = $request->getParam('hungry');
    $bored = $request->getParam('bored');

    $query = "DELETE FROM Userratings WHERE username='$username' AND movieid='$movieid'";
    $result = $mysqli->query($query);

    $query = "INSERT INTO Userratings(username, movieid, happy, angry, smart, excited, relaxed, shocked, scared, sad, hungry, bored) VALUES ('$username', '$movieid', '$happy', '$angry', '$smart', '$excited', '$relaxed', '$shocked', '$scared', '$sad', '$hungry', '$bored');";
    $result = $mysqli->query($query);


    echo "ok";

  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>