<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];

  try { 
    $query = "SELECT about FROM Users WHERE sid = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    $json = json_encode($data);
    echo substr($json, 10, -2);
  } 

  catch(Exception $e) {
    echo "Something went wrong!";
  }
?>