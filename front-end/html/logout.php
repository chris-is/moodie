<?php
  
  require_once('database.php');
  session_start();
  $sid = $_SESSION['sid'];
  $query = "UPDATE Users SET sid=0, status=0 WHERE sid='$sid'";
  $result = $mysqli->query($query);

  $_SESSION['sid'] = 0;
  unset($_SESSION);

?>

<script type="text/javascript">
window.location.href = '/COMP307/front-end/html/index.php';
</script>