<?php
  require 'database.php';
  $db = getDB();

  try { 
    //Return the most rated movies in the database
    $query = "SELECT movieid, COUNT(*) FROM Userratings GROUP BY movieid ORDER BY COUNT(*) DESC";
    $stmt = $db->prepare($query);
    $stmt->execute();
    $result = $stmt->fetchAll();

    header("Content-Type: application/json; charset=utf-8");
    echo json_encode($result);

  } 
  catch(Exception $e) {
    echo "Error while getting featured movies.";
  }
?>