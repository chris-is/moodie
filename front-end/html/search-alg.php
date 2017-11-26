<?php
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

if( isset($_POST["Calm"]) ){
  $moods['Calm'] = "on";
}
else{
  $moods['Calm'] = NULL;
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

$userQuery = "";
$urlquery = "";
//To store the searching query with , if the user enters any
if( isset($_POST['data']) ) {
    $userQuery = $_POST['data'];
}

//To process the searching query to search in Movie API's database
$words = explode(" ", $userQuery);
foreach($words as $w){
  $urlquery .= ($w .= "%20");
}
$urlquery = "" . substr($urlquery, 0, -1);
$urlquery = "" . substr($urlquery, 0, -1);
$urlquery = "" . substr($urlquery, 0, -1);
$jsonurl = "https://api.themoviedb.org/3/search/movie?api_key=1753a8a0eee9f02ab07f902370f8f1ea&language=en-US&query=";
$jsonurl .= ($urlquery .= "&include_adult=false");
$jsonurl = urlencode($jsonurl);
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

if(is_array($result)){
  foreach($result as $movie) {//$movie is an object and id is a property of it
    $ids[] = ($movie->id);
    //Row with that specific id
    $traverse = mysql_query("SELECT * FROM Movies WHERE movieid='($movie->id)'");
    if(mysql_num_rows($traverse) == 1){
      $existed_ids[] = ($movie->id);
      $row = $traverse->fetch_assoc();
      $priority['($movie->id)'] = -($row["happy"]+$row["angry"]+$row["smart"]+$row["excited"]+$row["relaxed"]+$row["shocked"]+$row["scared"]+$row["sad"]+$row["hungry"]+$row["bored"]) / 11.0;
      $names['($movie->id)'] = ($movie->title);
      $iamges['($movie->id)'] = ($movie->poster_path);
    }
    else{
      $other_ids['($movie->id)'] = ($movie->title);
      $iamges['($movie->id)'] = ($movie->poster_path);
    }
  }
  asort($priority);
  foreach($priority as $key => $value){
    echo '<div id="name" class="row">';
    echo '<h3 style="background-color: #ffd37a;padding: 0.5rem;border-radius: 5px;">' . $names["$key"] . '</h3>';
    echo '</div>';

    echo '<div id="images" class="row">';
    echo '<div id="poster" class="col-sm-5">';
    echo '<img src="https://image.tmdb.org/t/p/w500"' . $image_res . ' width=70% height=auto>';
    echo '</div>';
  }
}

?>


