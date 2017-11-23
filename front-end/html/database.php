<?php
$host = "localhost";
$user = "root";
$pass = "";
$db_name = "Moodie";
try{
$mysqli = new mysqli($host, $user, $pass, $db_name);
} catch (Exception $e) {
	echo "Service unavailable";
	exit;
}