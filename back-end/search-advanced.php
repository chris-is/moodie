<?php
require 'database.php';
$db = getDB();
session_start();

try {
  $country = $_POST["country"];
  $year = $_POST["year"];

  $moods = array();
  if(($_POST["happy"])=="on"){
    array_push($moods, "happy");
  }
  if(($_POST["angry"])=="on"){
    array_push($moods, "angry");
  }
  if(($_POST["smart"])=="on"){
    array_push($moods, "smart");
  }
  if(($_POST["excited"])=="on"){
    array_push($moods, "excited");
  }
  if(($_POST["relaxed"])=="on"){
    array_push($moods, "relaxed");
  }
  if(($_POST["shocked"])=="on"){
    array_push($moods, "shocked");
  }
  if(($_POST["scared"])=="on"){
    array_push($moods, "scared");
  }
  if(($_POST["sad"])=="on"){
    array_push($moods, "sad");
  }
  if(($_POST["hungry"])=="on"){
    array_push($moods, "hungry");
  }
  if(($_POST["bored"])=="on"){
    array_push($moods, "bored");
  }
  $size = sizeof($moods);

  $apiurl = "https://api.themoviedb.org/3/discover/movie?api_key=1753a8a0eee9f02ab07f902370f8f1ea&sort_by=popularity.desc&include_adult=false&include_video=false&page=1";
  if($year != "undefined"){
    $apiurl .= "&year=";
    $apiurl .= $year;
  }
  if($country != "undefined"){
    $apiurl .= "&region=";
    $apiurl .= $country;
  }
  $jsonStr = file_get_contents($apiurl);
  $jsonObj = json_decode($jsonStr);
  $result = $jsonObj->results;

  $priority = array();
  $names = array();
  $other_ids = array();
  $image_paths = array();
  $rows = array();

  /* check if this movie has already existed in the website's database,
    if yes, get the corrsponding rating info;
    if no, put the id of this movie in an array for these movies. */
      
  if(is_array($result)){
    foreach($result as $movie) {
      $movieid = ($movie->id);
      $query = "SELECT * FROM Movies WHERE movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if(count($row) > 0){
        $names[$movieid] = ($movie->title);
        $image_paths[$movieid] = ($movie->poster_path);

        for($i=0; $i<$size; $i++){

          $temp = $moods[$i];

          $priority[$movieid] = $priority[$movieid] + $row[$temp];
          echo "hm";
          echo $row[$temp];
        }
        $priority[$movieid] = $priority[$movieid]/10.0;
      }
      else {
        $other_ids[$movieid] = ($movie->title);
        $image_paths[$movieid] = ($movie->poster_path);
      }
    }

    arsort($priority);
    $detail[] = array();
    $detail[0][0] = "aa";

    //header("Content-Type: application/json; charset=utf-8");
    //echo json_encode($detail);
    print_r($detail);

    /*$i = 0;
    $p_size = sizeof($priority);
    $o_size = sizeof($other_ids);
    foreach($priority as $key=>$value){
      if($i < $p_size){
        $detail[$i][0] = $key;
        $detail[$i][1] = $names[$key];
        $detail[$i][2] = $image_paths[$key];
        $i++;
      }
    }
    foreach($other_ids as $key=>$value){
      if($i < $p_size + $o_size){
        $detail[$i][0] = $key;
        $detail[$i][1] = $value;
        $detail[$i][2] = $image_paths[$key];
        $i++;
      }
    }*/

  }

  
  
}

catch(Exception $e) {
  echo "Something went wrong!";
}

?>
