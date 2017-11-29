<?php
try { 
  require_once('database.php');
  //To store the country and year, if user chooses any

  if( isset($_POST["country"]) ){
     $country = $_POST["country"];
  }

  if( isset($_POST["year"]) ){
    $year = $_POST["year"];
  }

  
  //$moods is an array to store the moods that the user checked
  $moods = array();
  if( isset($_POST["Happy"]) ){
    $moods['Happy'] = "on";
  }
  else{
    $moods['Happy'] = NULL;
  }

  if( isset($_POST["Sad"]) ){
    $moods['Sad'] = "on";
  }
  else{
    $moods['Sad'] = NULL;
  }

  if( isset($_POST["Excited"]) ){
    $moods['Excited'] = "on";
  }
  else{
    $moods['Excited'] = NULL;
  }

  if( isset($_POST["Scared"]) ){
    $moods['Scared'] = "on";
  }
  else{
    $moods['Scared'] = NULL;
  }

  if( isset($_POST["Hungry"]) ){
    $moods['Hungry'] = "on";
  }
  else{
    $moods['Hungry'] = NULL;
  }

  if( isset($_POST["Shocked"]) ){
    $moods['Shocked'] = "on";
  }
  else{
    $moods['Shocked'] = NULL;
  }

  if( isset($_POST["Relaxed"]) ){
    $moods['Relaxed'] = "on";
  }
  else{
    $moods['Relaxed'] = NULL;
  }

  if( isset($_POST["Bored"]) ){
    $moods['Bored'] = "on";
  }
  else{
    $moods['Bored'] = NULL;
  }

  if( isset($_POST["Smart"]) ){
    $moods['Smart'] = "on";
  }
  else{
    $moods['Smart'] = NULL;
  }

  if( isset($_POST["Angry"]) ){
    $moods['Angry'] = "on";
  }
  else{
    $moods['Angry'] = NULL;
  }

  $userquery = "";
  $urlquery = "";

  //To store the searching query with , if the user enters any
  if( isset($_POST['query']) ) {
      $userquery = $_POST['query'];
  }

  //To process the searching query to search in Movie API's database
  $words = explode(" ", $userquery);
  foreach($words as $w){
    $urlquery .= ($w .= "%20");
  }
  $urlquery = "" . substr($urlquery, 0, -1);
  $urlquery = "" . substr($urlquery, 0, -1);
  $urlquery = "" . substr($urlquery, 0, -1);
  $jsonurl = "https://api.themoviedb.org/3/search/movie?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US&query=";
  $jsonurl .= ($urlquery .= "&include_adult=false");

/*
  if( isset($country) ){
     $jsonurl .= ("&region=" .= $country);
  }
  if( isset($year) ){
     $jsonurl .= ("&year=" .= $year);
  }*/

  //Search in Movie API's database and return ids of results as an array
  $jsonStr = file_get_contents($jsonurl);
  $jsonObj = json_decode($jsonStr);
  $result = $jsonObj->results;

  $ids = array();
  $existed_ids = array();
  $priority = array();
  $names = array();
  $other_ids = array();
  $images = array();


  foreach($result as $movie) {//$movie is an object and id is a property of it
    $ids[] = ($movie->id);

    //Row with that specific id
    
    
    $query = "SELECT * FROM Movies WHERE movieid='($movie->id)'";
    $qresult = $mysqli->query($query);
    if(mysql_num_rows($qresult) == 1){
      $existed_ids[] = ($movie->id);
      $row = $qresult->fetch_assoc();
      $priority['($movie->id)'] = -($row["happy"]+$row["angry"]+$row["smart"]+$row["excited"]+$row["relaxed"]+$row["shocked"]+$row["scared"]+$row["sad"]+$row["hungry"]+$row["bored"]) / 10.0;
      $names['($movie->id)'] = ($movie->title);
      $images['($movie->id)'] = ($movie->poster_path);
    }

    
    else{
      $other_ids['($movie->id)'] = ($movie->title);
      $images['($movie->id)'] = ($movie->poster_path);
    }
  }
  //Display all names and posters of all movies that were in our database in sorted order
  //asort($priority);
  //echo $priority;


  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>
