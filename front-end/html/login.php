<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  $app = new Slim\App();

  $app->post('/', function ($request, $response) {
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
        $_SESSION['status'] = 1;
        $_SESSION['username'] = $userlogin;
        $query = "UPDATE Users SET sid='$id', status=1 WHERE username='$userlogin'";
        $result = $mysqli->query($query);
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

<script type="text/javascript">
window.location.href = '/COMP307/front-end/html/index-reg.php';
</script>