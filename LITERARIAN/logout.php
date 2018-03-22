<?php
 ob_start();
      session_start();
setcookie (session_id(), "", time() - 3600);
session_destroy();
session_write_close();
header('Location: http://localhost/v3/Literarian_login.php')

?>