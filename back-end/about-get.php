<?php
  require_once('database.php');
  session_start();
  $sid = $_SESSION['sid'];

  $query = "SELECT about FROM Users WHERE sid = '$sid'";

  $result = $mysqli->query($query);
  while ($row = $result->fetch_assoc()){
    $data[] = $row;
  }
   $json = json_encode($data);
   echo substr($json, 11, -3);
?>