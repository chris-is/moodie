<?php

use Slim\Http\Request;
use Slim\Http\Response;

//Get username and password from submitted form
$app->post('/', function ($request, $response) {
    $username = $request->getParam('username');
    $password = $request->getParam('password');
    $email = $request->getParam('email');

    //Insert username and password into database
    $insert = "INSERT INTO Users (username, password, email) VALUES ('$username', '$password', '$email');";
    $db = getDB();
    $stmt = $db->query($insert); 

    //Call function to print database
    //$response = printdb($db);
    //echo $response;
});