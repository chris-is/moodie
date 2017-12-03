<?php
require 'database.php';
$db = getDB();
session_start();
$_SESSION['search-results'] = "simple search";

try { 
  /*$jsonStr = file_get_contents($userquery);
  $jsonObj = json_decode($jsonStr);
  $result = $jsonObj->results;

  echo $result;*/

} 
catch(Exception $e) {
  echo "Something went wrong!";
}


?>