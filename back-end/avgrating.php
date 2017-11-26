<?php
  $movieid = $request->getParam('movieid');
  $moviename = $request->getParam('moviename');

  try { 
    require_once('database.php');

    $ratings;
    $query = "SELECT * from Userratings where movieid='$movieid'";
    $result = $mysqli->query($query);

    if(mysqli_num_rows($result) == 0){
      $username = "0";
      $query = "SELECT * from Userratings where username='$username'";
      $result = $mysqli->query($query);
      while ($row = $result->fetch_assoc()){
        $ratings[] = $row;
      }
    }

    else {
      $query = "SELECT * from Movies where movieid='$movieid'";
      $result = $mysqli->query($query);
      if(mysqli_num_rows($result) == 0){
        $query = "INSERT INTO Movies(movieid, moviename) VALUES ('$movieid', '$moviename')";
        $result = $mysqli->query($query);
      }

      //HAPPY
      $query = "SELECT 
      AVG(happy) AS happyavg, AVG(angry) AS angryavg, AVG(smart) AS smartavg, AVG(excited) AS excitedavg, AVG(relaxed) AS relaxedavg, AVG(shocked) AS shockedavg, AVG(scared) AS scaredavg, AVG(sad) AS sadavg, AVG(hungry) AS hungryavg, AVG(bored) AS boredavg FROM Userratings WHERE movieid='$movieid'";
      $result = $mysqli->query($query);
      while ($row = $result->fetch_assoc()){
        $rating[] = $row;
      }
      $happyavg = round($rating[0]['happyavg']);
      $angryavg = round($rating[0]['angryavg']);
      $smartavg = round($rating[0]['smartavg']);
      $excitedavg = round($rating[0]['excitedavg']);
      $relaxedavg = round($rating[0]['relaxedavg']);
      $shockedavg = round($rating[0]['shockedavg']);
      $scaredavg = round($rating[0]['scaredavg']);
      $sadavg = round($rating[0]['sadavg']);
      $hungryavg = round($rating[0]['hungryavg']);
      $boredavg = round($rating[0]['boredavg']);

      $query = "UPDATE Movies SET happy='$happyavg', angry='$angryavg', smart='$smartavg', excited='$excitedavg', relaxed='$relaxedavg', shocked='$shockedavg', scared='$scaredavg', sad='$sadavg', hungry='$hungryavg', bored='$boredavg' WHERE movieid='$movieid'";
      $result = $mysqli->query($query);
      
      $query = "SELECT * from Movies where movieid='$movieid'";
      $result = $mysqli->query($query);
      while ($row = $result->fetch_assoc()){
        $ratings[] = $row;
      }

    }

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($ratings);
  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>