<?php
 $host='localhost';
 $user='veera';
 $pass='';
 $conn=mysqli_connect($host,$user,$pass);
 $db=mysqli_select_db($conn,'Project');
 if(!$conn or !$db)
 {
  die('Error in Connecting to Server and Database<br/><br/>');
 }
 

?>