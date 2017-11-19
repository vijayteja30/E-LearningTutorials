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
		
	   </ul>
	  </nav>
	  <div>
			<?php
			 session_start();
			 include 'Db.php';
			 if(empty($_SESSION['id']))
			 {
				die("Please Login to Access the Page!!!!");
			 }
			 $query="SELECT DISTINCT(Username) FROM `AddTutors`";
			 $query_result=mysqli_query($conn,$query);
			 while($rows=mysqli_fetch_assoc($query_result))
			 {
				 $Instructor_Username=$rows['Username'];
				 $query1="SELECT * FROM `AddTutors` WHERE Username='$Instructor_Username'";
				 $query_result1=mysqli_query($conn,$query1);
				 while($rows1=mysqli_fetch_assoc($query_result1))
				 {
					 $Course=$rows1['Course'];
					 $CDescription=$rows1['CDescription'];
					 $TutorId=$rows1['Id'];
					 echo '<table frame="below" width="70%">';
					 echo '<tr><td width="50%"><h2><b style="color:#45B39D;">'.$Course.' Tutorial </b></h2>'.'By<b style="color:#2ECC71;">'.$Instructor_Username.'</b></td></tr>';
					 echo '<tr ><td><div style="background-color:#4ccc92;" border="1">';
					 echo '<p> Course Description:<b style="color:red;">'.$CDescription.'</b></p></div></td></tr>';
					 echo '<tr><td align="center"><a href="ShowLectures.php?id='.$TutorId.'" style="text-decoration:none;"><h3> GoTo Course...</h3></a></td></tr>';
					 echo '</table>';
				 }
			 }
			?>

	  
	  
	  </div>
	  
 </body>

</html>
 