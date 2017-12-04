<?php
  require 'database.php';
  $db = getDB();
  $movieid = $request->getParam('movieid');
  $moviename = $request->getParam('moviename');

  try { 
    //Get all user ratings for a particular movie in Userratings
    $ratings;
    $query = "SELECT * from Userratings where movieid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$movieid]);
    $result = $stmt->fetchAll();

    //If the movie has never been rated, return (default) empty ratings
    if(count($result) == 0){
      $username = "0";
      $query = "SELECT * from Userratings where username=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$username]);
      $ratings = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    //If the movie has been rated before
    else {
      //See if the movie has been added to the Movies databse
      $query = "SELECT * from Movies where movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $result = $stmt->fetchAll();

      //If the Movie has not been added yet, add its name and ID in first
      if(count($result) == 0){
        $query = "INSERT INTO Movies(movieid, moviename) VALUES (?, ?)";
        $stmt = $db->prepare($query);
        $stmt->execute([$movieid, $moviename]);
      }

      //Then update that movie's row with the average from all user ratings
      $query = "SELECT 
      AVG(happy) AS happyavg, AVG(angry) AS angryavg, AVG(smart) AS smartavg, AVG(excited) AS excitedavg, AVG(relaxed) AS relaxedavg, AVG(shocked) AS shockedavg, AVG(scared) AS scaredavg, AVG(sad) AS sadavg, AVG(hungry) AS hungryavg, AVG(bored) AS boredavg FROM Userratings WHERE movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $rating = $stmt->fetch(PDO::FETCH_ASSOC);

      //Round the averages
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

      //Update the movie's average mood ratings in Movie
      $query = "UPDATE Movies SET happy='$happyavg', angry='$angryavg', smart='$smartavg', excited='$excitedavg', relaxed='$relaxedavg', shocked='$shockedavg', scared='$scaredavg', sad='$sadavg', hungry='$hungryavg', bored='$boredavg' WHERE movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      
      //Return the new mood ratings
      $query = "SELECT * from Movies where movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $ratings = $stmt->fetch(PDO::FETCH_ASSOC);

    }

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($ratings);
  } 
  catch(Exception $e) {
    echo "Error while getting the movie's average ratings.";
  }


?>