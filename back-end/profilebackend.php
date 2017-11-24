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


$app->post('/checkusername', function ($request, $response) {
  $username = $request->getParam('username');
  
  try { 
    require_once('database.php');
    $query = "SELECT * FROM Users WHERE username = '$username'";
    $result = $mysqli->query($query);    

    if (count($result->fetch_assoc()) > 0){ 
      echo "existing";
    } 
    else {
    	if (!preg_match('/^[a-zA-Z0-9]{4,16}$/i', $username)){
    		echo "param";
    	}
      else {
      	echo "ok";
      }
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

	  echo $username;

	} 

	//Print error messages if any
	catch(PDOException $e) {
	  echo json_encode($e->getMessage());
	}
});

$app->post('/login', function ($request, $response) {
  $userlogin = $request->getParam('username');
  $userpass = $request->getParam('password');

  try { 
    require_once('database.php');

    $query = "SELECT * from Users where username='$userlogin'";

    $result = $mysqli->query($query);

    while ($row = $result->fetch_assoc()){
      $userdata[] = $row;
    }
    if ($userdata[0]['password'] == $userpass) {
      $id = uniqid();
      session_id($id);
      session_start();
      $_SESSION['username'] = $userlogin;
      $query = "UPDATE Users SET sid='$id', status=1 WHERE username='$userlogin'";
      $result = $mysqli->query($query);
      echo "ok";
    }
    else {
      echo "nope";
    }

  } 
  catch(Exception $e) {
    echo "Something went wrong!";
  }

  
});

$app->run();
?>