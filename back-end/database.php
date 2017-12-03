<?php
/*$host = "localhost";
$user = "root";
$pass = "";
$db_name = "Moodie";
try{
$mysqli = new mysqli($host, $user, $pass, $db_name);
} catch (Exception $e) {
	echo "Service unavailable";
	exit;
}*/

function getDB() {
$dbhost="localhost";
$dbuser="root";
$dbpass="";
$dbname="Moodie";
$dbConnection = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass); 
$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $dbConnection;
}
