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
		 session_start();
		 include 'Db.php';
		 if(isset($_GET['id']))
		 {
			 $TutorId=$_GET['id'];
			 if(!empty($TutorId))
			 {
				$query="SELECT * FROM `AddTutors` WHERE Id='$TutorId'";
				$query_result=mysqli_query($conn,$query);
				while($rows=mysqli_fetch_assoc($query_result))
				{
					$count=0;
					$Course=$rows['Course'];
					$Instructor_Username=$rows['Username'];
					$query1="SELECT * FROM `VideoLinks` WHERE Username='$Instructor_Username' and Course='$Course'";
					$query_result1=mysqli_query($conn,$query1);
					echo '<table frame="hsides" width="100%">';
					while($rows1=mysqli_fetch_assoc($query_result1))
					{
						$VideoName=$rows1['VideoName'];
						$VideoLink=$rows1['VideoLink'];
						$VideoId=$rows1['Id'];
						echo '<tr><td style="color:#e812b4;">'.++$count.'</td><td><a href="Watch.php?id='.$VideoId.'" style="text-decoration:none;"><b style="color:#1279e8;">'.$VideoName.'</b></a></td></tr>';
						echo '<br>';
					}
					echo '</table>';
					$count=0;
				}
			 }
		 }
		?>
	  
	  
	  </div>
	  
 </body>

</html>
 




