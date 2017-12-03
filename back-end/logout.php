<?php
  require 'database.php';
  $db = getDB();

  session_start();
  $sid = $_SESSION['sid'];

  $query = "UPDATE Users SET sid=0, status=0 WHERE sid=?";
  $stmt = $db->prepare($query);
  $stmt->execute([$sid]);

  $_SESSION['sid'] = 0;
  unset($_SESSION);

  echo "ok";

?>