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
    array_push($moods, "happy");
  }

  if( isset($_POST["Sad"]) ){
    array_push($moods, "sad");
  }

  if( isset($_POST["Excited"]) ){
    array_push($moods, "excited");
  }

  if( isset($_POST["Calm"]) ){
    array_push($moods, "calm");
  }

  if( isset($_POST["Scared"]) ){
    array_push($moods, "scared");
  }

  if( isset($_POST["Hungry"]) ){
    array_push($moods, "hungry");
  }

  if( isset($_POST["Shocked"]) ){
    array_push($moods, "shocked");
  }

  if( isset($_POST["Relaxed"]) ){
    array_push($moods, "relaxed");
  }

  if( isset($_POST["Bored"]) ){
    array_push($moods, "bored");
  }

  if( isset($_POST["Smart"]) ){
    array_push($moods, "smart");
  }

  if( isset($_POST["Angry"]) ){
    array_push($moods, "angry");
  }
  $size = sizof($moods);


  echo "here";
  $userquery = "";
  $urlquery = "";

  //To store the searching query with , if the user enters any
  /*if( isset($_POST['query']) ) {
      $userquery = $_POST['query'];
  }*/

  $userquery = $request->getParam('query');

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

  echo $userquery;
  echo $jsonurl;

  /*
  //Search in Movie API's database and return ids of results as an array
  $jsonStr = file_get_contents($jsonurl);
  $jsonObj = json_decode($jsonStr);
  $result = $jsonObj->results;

  $ids = array();
  $dbrow = array();
  $priority = array();
  $names = array();
  $other_ids = array();
  $images = array();

  if(is_array($result)){
    foreach($result as $movie) {//$movie is an object and id is a property of it
      $ids[] = ($movie->id);
      //Row with that specific id
      $tempid = ($movie->id);
      //$tempid = 1234;

      $query = "SELECT * FROM Movies WHERE movieid='$tempid'";
      $qresult = $mysqli->query($query);

      if(mysqli_num_rows($qresult) == 1){
        while ($row = $qresult->fetch_assoc()){
          $dbrow[] = $row;
        }        

        for($i=0; $i<$size; $i++){
          $priority['$tempid'] = $priority['$tempid'] + $dbrow[0]['$moods["$i"]'];
        }
        $priority['$tempid'] = $priority['$tempid']/10.0;

        
        $priority[$tempid] = ($dbrow[0]['happy'] + $dbrow[0]['sad'] + $dbrow[0]['excited'] + $dbrow[0]['scared'] + $dbrow[0]['hungry'] + $dbrow[0]['shocked'] + $dbrow[0]['relaxed'] + $dbrow[0]['bored']+$dbrow[0]['smart'] + $dbrow[0]['angry']) / 10.0;

        echo $priority[$tempid];

        $names[$tempid] = ($movie->title);
        $images[$tempid] = ($movie->poster_path);
      }

      
      else{
        $other_ids['($movie->id)'] = ($movie->title);
        $images['($movie->id)'] = ($movie->poster_path);
      }
    }
  }*/
  
  //Display all names and posters of all movies that were in our database in sorted order
  //rsort($priority);
  //echo $priority;


  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }


?>
