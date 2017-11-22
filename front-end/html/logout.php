<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();

  
  require_once('database.php');
  
  session_start();
  $uname = $_SESSION['username'];
  $query = "UPDATE Users SET sid=0, status=0 WHERE username='$uname'";
  $result = $mysqli->query($query);
  $_SESSION['status'] = 0;
  $_SESSION['username'] = 0;

  $app->run();

?>

<script type="text/javascript">
window.location.href = '/COMP307/front-end/html/index.php';
</script>