<?php
echo "what";
require 'database.php';
$db = getDB();
session_start();

try { 
/*  
  $detail[][] = array();
  $detail[0][0] = "68156";
  $detail[0][1] = "Three meals a day";
  $detail[0][2] = "/8fV5T9sYZ3rMYphmikIgDrXL1oi.jpg";

  $detail[1][0] = "70123";
  $detail[1][1] = "New journey to the west";
  $detail[1][2] = "/aR0CKi5O3QN1JlUgDNHYVvIDg8v.jpg";
    

  header("Content-Type: application/json; charset=utf-8");
  echo json_encode($detail);


  } 
  catch(Exception $e) {
    echo "Error while returning advanced search.";
  }

require 'database.php';
$db = getDB();
session_start();
$_SESSION['search-results'] = "advanced search";

try {
  $country = $_POST["country"];
  $year = $_POST["year"];

  $moods = array();
  if(($_POST['happy'])=="on"){
    array_push($moods, "happy");
  }
  if(($_POST['angry'])=="on"){
    array_push($moods, "angry");
  }
  if(($_POST['smart'])=="on"){
    array_push($moods, "smart");
  }
  if(($_POST['excited'])=="on"){
    array_push($moods, "excited");
  }
  if(($_POST['relaxed'])=="on"){
    array_push($moods, "relaxed");
  }
  if(($_POST['shocked'])=="on"){
    array_push($moods, "shocked");
  }
  if(($_POST['scared'])=="on"){
    array_push($moods, "scared");
  }
  if(($_POST['sad'])=="on"){
    array_push($moods, "sad");
  }
  if(($_POST['hungry'])=="on"){
    array_push($moods, "hungry");
  }
  if(($_POST['bored'])=="on"){
    array_push($moods, "bored");
  }
  $size = sizof($moods);


  $apiurl = "https://api.themoviedb.org/3/discover/movie?api_key=1753a8a0eee9f02ab07f902370f8f1ea&sort_by=popularity.desc&include_adult=false&include_video=false&page=1&language=en-US";
  if($year != "undefined"){
    $apiurl .= "year=";
    $apiurl .= $year;
  }
  if($country != "undefined"){
    $apiurl .= "region=";
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

      /*
  if(is_array($result)){
    foreach($result as $movie) {
      $movieid = ($movie->id);
      $query = "SELECT * FROM Movies WHERE movieid=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$movieid]);
      $row = $stmt->fetch(PDO::FETCH_ASSOC);

      if(count($row) > 0){
        $names['$movieid'] = ($movie->title);
        $image_paths['$movieid'] = ($movie->poster_path);


        for($i=0; $i<$size; $i++){
          $temp = $moods["$i"];
          $priority['$movieid'] = $priority['$movieid'] + $row[$temp];
        }
        $priority['$movieid'] = $priority['$movieid']/10.0;
      }
      else {
        $other_ids['$movieid'] = ($movie->title);
        $image_paths['$movieid'] = ($movie->poster_path);
      }
    }
    rsort($priority);
    $details[][] = array();
    foreach($priority as $key=>$value){
      $detail[][0] = $key;
      $detail[][1] = $names['$key'];
      $detail[][2] = $image_paths['$key'];
    }
    foreach($other_ids as $key=>$value){
      $detail[][0] = $key;
      $detail[][1] = $value;
      $detail[][2] = $image_paths['$key'];
    }
  }*/
  //header("Content-Type: application/json; charset=utf-8");
  //echo json_encode($details);
  echo "what";
}

catch(Exception $e) {
  echo "Something went wrong!";
}

?>
