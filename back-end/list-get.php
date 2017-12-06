<?php
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];
  $user = $request->getParam('user');
  try { 
    //Get the "about" information from the currently logged in user
    $query = "SELECT list FROM Users WHERE username = ?";
    $stmt = $db->prepare($query);
    $stmt->execute([$user]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);
    
    $result = $data['list'];
    $result2 = explode(",",$result);

    echo json_encode($result2);
  } 

  catch(Exception $e) {
    echo "Error while getting about information.";
  }
?>