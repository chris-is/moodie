<script type="text/javascript">
//window.location.href = '/COMP307/front-end/html/test.php';
</script>
<?php
  use \Psr\Http\Message\ServerRequestInterface as Request;
  require '../../vendor/autoload.php';

  //$settings = ['settings' => ['addContentLengthHeader' => false]];
  $app = new Slim\App();

  require_once('database.php');

  $username = trim(strtolower($_POST['username']));

  $query = "SELECT COUNT(*) FROM Users WHERE username='$username'";

  $result = $mysqli->query($query);

  echo $result;
  if($result>0){
    echo "<span class='status'>Username Not Available.</span>";
  }
  else{
    echo "<span class='status'>Username Available.</span>";
  }

  echo $result;
  

?>