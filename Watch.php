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
		<li><a href="Member_Load.php">Home</a></li>
		<li><a href="Search_Tutors.php">Search Tutors</a></li>
		<li><a href="test.php">Tutors</a></li>
		<li><a href="#">Complaint</a></li>
	   </ul>
	  </nav>
	  <div>
		<?php
		     
			 include 'Db.php';
			 $id=$_GET['id'];
			 session_start();
			 if(empty($_SESSION['id']))
			 {
				 die("Please Login To Access This Page!!!");
			 }
			 if(isset($_GET))
			 {
				 if(!empty($id))
				 {
					 $query="SELECT * FROM `VideoLinks` WHERE id='$id'";
					 $query_result=mysqli_query($conn,$query);
					 while($rows=mysqli_fetch_assoc($query_result))
					 {
						 $CourseName=$rows['Course'];
						 $VideoName=$rows['VideoName'];
						 $url=$rows['VideoLink'];
						 echo '<center><video width="500" height="500" src="'.$url.'" controls>'.$VideoName.'</video></center>';
					 }
				 }
			 }
 
        ?>
	  
	  
	  </div>
	  
 </body>

</html>
 






