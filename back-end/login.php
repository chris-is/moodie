<?php
  require 'database.php';
  $db = getDB();
  $userlogin = $request->getParam('username');
  $userpass = $request->getParam('password');

  try { 
    $post_data = http_build_query(
      array(
        'secret' => "6LcSvDsUAAAAADrn86cZ6nfGAFWn_tgxUogddin9",
        'response' => $_POST['g-recaptcha-response'],
        'remoteip' => $_SERVER['REMOTE_ADDR']
      )
    );
    $opts = array('http' =>
      array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => $post_data
      )
    );
    $context  = stream_context_create($opts);
    $response = file_get_contents('https://www.google.com/recaptcha/api/siteverify', false, $context);
    $result = json_decode($response);
    if (!$result->success) {
        echo "captcha";
    }
    else{
      //Get the user information matching the provided username
      $query = "SELECT * from Users where username=?";
      $stmt = $db->prepare($query);
      $stmt->execute([$userlogin]);
      $userdata = $stmt->fetch(PDO::FETCH_ASSOC);
      $hashpass = $userdata['password'];
      
      //Check if the provided username and password belong to the same user
      if (password_verify($userpass, $hashpass)) {
        $status = 1;
        $sid = uniqid();
        session_id($sid);
        session_start();
        $_SESSION['sid'] = $sid;

        //If the username and password match, update that row's SID and status values to confirm the user's login status
        $query = "UPDATE Users SET sid=?, status=? WHERE username=?";
        $stmt = $db->prepare($query);
        $stmt->execute([$sid, $status, $userlogin]);

        echo "ok";
      }
      else {
        echo "nope";
      }
    }

  } 
  catch(Exception $e) {
    echo "Error while logging in.";
  }
?>