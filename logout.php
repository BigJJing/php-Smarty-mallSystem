<?php
  session_start();
  header("content-type:text/html;charset=utf-8");
  session_destroy();
  echo '<script>alert(\'用户已安全退出！\');location=(\'index.php\');</script>';
?>
