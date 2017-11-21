<?php
  session_start();
  unset($_SESSION);
  session_destroy();
?>

<script type="text/javascript">
window.location.href = '/COMP307/front-end/html/index.php';
</script>