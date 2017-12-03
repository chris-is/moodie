<?php
  require 'database.php';
  $db = getDB();
  $movieid = $request->getParam('movieid');
  $moviename = $request->getParam('moviename');

  try { 
    $ratings;
    $query = "SELECT * from Userratings where movieid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$movieid]);
    $result = $stmt->fetchAll();

    if(count($result) == 0){
      $username = "0";
      $query = "SELECT * from Userratings where username=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$username]);
      $ratings = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    else {
      $query = "SELECT * from Movies where movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $result = $stmt->fetchAll();

      if(count($result) == 0){
        $query = "INSERT INTO Movies(movieid, moviename) VALUES (?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$movieid, $moviename]);
      }

      $query = "SELECT 
      AVG(happy) AS happyavg, AVG(angry) AS angryavg, AVG(smart) AS smartavg, AVG(excited) AS excitedavg, AVG(relaxed) AS relaxedavg, AVG(shocked) AS shockedavg, AVG(scared) AS scaredavg, AVG(sad) AS sadavg, AVG(hungry) AS hungryavg, AVG(bored) AS boredavg FROM Userratings WHERE movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $rating = $stmt->fetch(PDO::FETCH_ASSOC);
      
      $happyavg = round($rating['happyavg']);
      $angryavg = round($rating['angryavg']);
      $smartavg = round($rating['smartavg']);
      $excitedavg = round($rating['excitedavg']);
      $relaxedavg = round($rating['relaxedavg']);
      $shockedavg = round($rating['shockedavg']);
      $scaredavg = round($rating['scaredavg']);
      $sadavg = round($rating['sadavg']);
      $hungryavg = round($rating['hungryavg']);
      $boredavg = round($rating['boredavg']);

      $query = "UPDATE Movies SET happy='$happyavg', angry='$angryavg', smart='$smartavg', excited='$excitedavg', relaxed='$relaxedavg', shocked='$shockedavg', scared='$scaredavg', sad='$sadavg', hungry='$hungryavg', bored='$boredavg' WHERE movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      
      $query = "SELECT * from Movies where movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $ratings = $stmt->fetch(PDO::FETCH_ASSOC);

    }

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($ratings);
  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>