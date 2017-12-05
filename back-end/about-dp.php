<?php

try { 
  require_once('database.php');
  session_start();
  $sid = $_SESSION['sid'];

if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["file"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['file']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        
        //$dataTime = date("Y-m-d H:i:s");
        
        //Insert image content into database
        $insert = $db->query("INSERT into Users (dp) VALUES ('$imgContent'");
        if($insert){
            echo "File uploaded successfully.";
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
    }
}

	echo "ASDASDSAD";
?>