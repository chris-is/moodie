<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';

$app = new \Slim\App;

//Creating new records with the fields from html form
$app->post('/about', function ($request) {
try {	
	require_once('database.php');

	$query = "INSERT INTO `Users` (`about`) VALUES (?)";

	$stmt = $mysqli->prepare($query);
	$stmt->bind_param("s", $about);

	$about = $request->getParsedBody()['about'];

	$stmt->execute();
	$query = "SELECT * FROM Users";

	$result = $mysqli->query($query);

	while ($row = $result->fetch_assoc()){
		$data[] = $row;
	}
	echo json_encode($data);
} catch(Exception $e) {
	echo "Something went wrong!";
}

});


$app->get('/about', function ($request) {

	require_once('database.php');
	$query = "SELECT * FROM Users";

	$result = $mysqli->query($query);
	while ($row = $result->fetch_assoc()){
		$data[] = $row;
	}
	echo json_encode($data);

});


$app->post('/checkusername', function ($request, $response){

	try {	
		require_once('database.php');
		$username = $request->getParam('username');
		$query = "SELECT * FROM Users WHERE username = '$username'";
		$result = $mysqli->query($query);
		if (mysql_num_rows($result) > 0){ 
		  echo "0";
		} 
		else {
		  echo "1";
		}
		
	} catch(Exception $e) {
		echo "Something went wrong!";
	}

});

$app->post('/signup', function ($request, $response) {
  $username = $request->getParam('username');
  $password = $request->getParam('password');
  $email = $request->getParam('email');
  
  try {
    require_once('database.php');

    $query = "INSERT INTO Users (username, password, email) VALUES ('$username', '$password', '$email');";

    $result = $mysqli->query($query);

  } 

  //Print error messages if any
  catch(PDOException $e) {
    echo json_encode($e->getMessage());
  }
  
});

$app->run();
?>