<?php
  
  require_once('database.php');
  session_start();
  $uname = $_SESSION['username'];
  $query = "UPDATE Users SET sid=0, status=0 WHERE username='$uname'";
  $result = $mysqli->query($query);

  $_SESSION['username'] = 0;
  unset($_SESSION);

?>

<script type="text/javascript">
window.location.href = '/COMP307/front-end/html/index.php';
</script>