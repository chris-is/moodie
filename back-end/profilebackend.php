<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../vendor/autoload.php';

$app = new \Slim\App;

require 'database.php';

//Creating new records with the fields from html form
$app->post('/about', function ($request) {
try {	
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
	//echo json_encode($data);
} catch(Exception $e) {
	echo "Something went wrong!";
}

});

$app->post('/checkusername', function($request){

	try {	
		echo "jajajajajaja";
		$query = "INSERT INTO Users (username, password, email) VALUES ('$username', '$password', '$email');";

		 $result = $mysqli->query($query);
		
		//echo json_encode($data);
	} catch(Exception $e) {
		echo "Something went wrong!";
	}

	/*$username = $request->getParam('username');

	$query = "INSERT INTO Users (username) VALUES ('$username');";

	//$query = "SELECT COUNT(*) FROM Users WHERE username='$username'";

	$result = $mysqli->query($query);

	echo "123";
	
	
	if($result>0){
	  echo "<span class='status'>Username Not Available.</span>";
	}
	else{
	  echo "<span class='status'>Username Available.</span>";
	}*/

});


$app->run();
?>