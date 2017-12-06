<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];
  $user = $request->getParam('user');

  try { 
    //ADD COMMENTS!
    $query = "SELECT * from Users where username=?";

    $stmt = $db->prepare($query);
    $stmt->execute([$user]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    $username = $user['username'];

    $query = "SELECT movieid FROM Userratings WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$username]);
    $ratings = $stmt->fetchAll();

    $array = array();
    foreach($ratings as $x)
    {
        $array[] = $x['movieid'];
      
    }
    $query = "SELECT moviename FROM Movies WHERE movieid IN(".implode(',',$array).")";

    $stmt = $db->prepare($query);
    $stmt->execute(); 
    $allReviews = $stmt->fetchAll();

    $array2 = array();
    foreach($allReviews as $x)
    {
      $array2[] = $x['moviename'];
    }


    for($i = 0; $i < count($array2); $i++) {
        echo $array2[$i] . '<br>';
    }

    //TESTING
    //echo count($array2);

  } 
  catch(Exception $e) {
    echo "No movies reviewed so far :(";
  }


?>