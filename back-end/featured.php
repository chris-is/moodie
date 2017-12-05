<?php
  require 'database.php';
  $db = getDB();

  try { 
    //Return the most rated movies in the database
    $query = "SELECT movieid, COUNT(*) FROM Userratings GROUP BY movieid ORDER BY COUNT(*) DESC";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    $i = 0;
    $detail[] = array();
    foreach($result as $movie){
      if($i < 10){
        $id = $movie['movieid'];
        
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
          $detail[$i][1] = $jsonObj->poster_path;
        }
        else{
          $jsonObj = json_decode($jsonStr);
          $detail[$i][1] = $jsonObj->poster_path;
          $detail[$i][0] = "movie=" . $id . "&tv=0";
        }

        $i++;
      }

    }

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($detail);

  } 
  catch(Exception $e) {
    echo "Error while getting featured movies.";
  }
?>