<?php
 session_start();
 if(empty($_SESSION['id']))
 {
	die("Please Login");
 }
 /*else
{
		 
 echo 'You\'re successfully logged in';
 echo '<a href=\'Logout.php\'>Logout</a>';	 
}*/

?>



<!DOCTYPE html>
<html>
 <head>
  <title style="color:orange;"> Online Learning Tutorials!!!</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  
 </head>
 <body>
  <header>
   <h1> Online Learning Tutorials!!! </h1>
  </header>
  <nav>
   <div>
    <i class="fa fa-bars fa-2x"></i>
   </div>
   <ul>
    <li><a href="#">Home</a></li>
	<li><a href="Search_Tutors.php">Search Tutors</a></li>
	<li><a href="test.php">Tutors</a></li>
	<li><a href="Logout.php">Logout</a></li>
   </ul>
  </nav>
 </body>

</html>
 