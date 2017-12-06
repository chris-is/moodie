<?php
    require 'database.php';
    $db = getDB();
    session_start();
    $sid = $_SESSION['sid'];
    $user = $request->getParam('user');

    $query = "SELECT about FROM Users WHERE username = ?";

    $stmt = $db->prepare($query);
    $stmt->execute([$user]);
    $data = $stmt->fetch(PDO::FETCH_ASSOC);

    //Display the contents of data
    print_r($data['about']);
?>