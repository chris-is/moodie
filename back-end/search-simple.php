<?php
try { 
  require_once('database.php');
  session_start();
  $_SESSION['search-results'] = "simple search";

  /*$jsonStr = file_get_contents($userquery);
  $jsonObj = json_decode($jsonStr);
  $result = $jsonObj->results;

  echo $result;*/

} 
catch(Exception $e) {
  echo "Something went wrong!";
}


?>