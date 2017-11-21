<?php

//Access database
function getDB() {
  $dbhost="localhost";
  $dbuser="root";
  $dbpass="9pUPOCULo7"; //Password should be changed if set
  $dbname="Store";
  $dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
  $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $dbConnection;
}

