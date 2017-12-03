<?php
  require 'database.php';
  $db = getDB();

  try { 
    $query = "SELECT movieid, COUNT(*) FROM Userratings GROUP BY movieid ORDER BY COUNT(*) DESC";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($result);

  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }
?>