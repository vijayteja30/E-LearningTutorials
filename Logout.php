<?php
 ob_start();
 session_start();
 session_destroy();
 echo $_SESSION['id'];
 header("Location: Member_Login.php");
?>