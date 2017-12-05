<?php

try { 
  require 'database.php';
  $db = getDB();
  session_start();
  $sid = $_SESSION['sid'];



    $imagename=$_FILES["upload_file"]["name"]; 

    //Get the content of the image and then add slashes to it 
    $imagetmp=addslashes (file_get_contents($_FILES['upload_file']['tmp_name']));

    //Insert the image name and image content in image_table
    echo $imagetmp;
    $query = "UPDATE Users SET dp=$imgtmp WHERE sid = ?";
    //$query = "UPDATE Users SET about=? WHERE sid=?";
    $stmt = $db->prepare($query);
    $stmt->execute([$sid]);


    //echo "hey";

}
  catch(Exception $e) {
    echo "Error while updating about information.";
  }

?>