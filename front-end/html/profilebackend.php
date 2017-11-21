<?php
use \Psr\Http\Message\ServerRequestInterface as Request;

require '../../vendor/autoload.php';

$app = new \Slim\App;

//Creating new records with the fields from html form
$app->post('/', function ($request) {
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
	//echo json_encode($data);
} catch(Exception $e) {
	echo "Something went wrong!";
}

});
$app->run();
?>