<?php
  if( isset($_POST["country"]) ){
     $country = $_POST["country"];
  }

  if( isset($_POST["year"]) ){
    $year = $_POST["year"];
  }

  $moods = array(); //$moods is an array

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

  if( isset($_POST["Enamored"]) ){
    $moods['Relaxed'] = "on";
  }
  else{
    $moods['Relaxed'] = NULL;
  }

  if( isset($_POST["Hopeful"]) ){
    $moods['Bored'] = "on";
  }
  else{
    $moods['Bored'] = NULL;
  }

  if( isset($_POST["Confused"]) ){
    $moods['Smart'] = "on";
  }
  else{
    $moods['Smart'] = NULL;
  }

  if( isset($_POST["Inquisitive"]) ){
    $moods['Angry'] = "on";
  }
  else{
    $moods['Angry'] = NULL;
  }

  session_start();
  if(!empty($moods)){
      $_SESSION['mood'] = $moods;
       //redirect_to("search-results.php");
  }
?>
