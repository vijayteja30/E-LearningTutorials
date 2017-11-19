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
	  <div id="Search_Tutors">
	    <table align='center'>
			<form method='POST' action='Search_Tutors.php'>
			 <tr>
			   <td>
				  <select height="50px" width="50px" name='Select_Menu'>
				    <option value="Author">Author</option>
				    <option value="Course Name">Course Name</option>
				    <option value="Videos Names"> Videos Names</option>
				  </select>
			   </td>
			   <td align='center'>
			   </td>
			   <td>
			    <input type='text' name='Search_Text' placeholder='Search Here...'>
			   </td>
			   <td>
			    <input type='submit' name='Search' value='Search'>
			   </td>
			 </tr>
			
			
			</form>
        </table>




      </div>	  
	   
	 
	 
	 
	 
	  <div>
			<?php
			 session_start();
			 include 'Db.php';
			 if(empty($_SESSION['id']))
			 {
				die("Please Login to Access the Page!!!!");
			 }
			 if(isset($_POST['Select_Menu']) && isset($_POST['Search_Text']))
			 {
				 $Select_Menu=$_POST['Select_Menu'];
				 $Search_Text=$_POST['Search_Text'];
				 if(!empty($Select_Menu) && !empty($Search_Text))
				 {
					if($Select_Menu=='Author')
					 {
							 $query1="SELECT * FROM `AddTutors` WHERE Username='$Search_Text'";
							 $query_result1=mysqli_query($conn,$query1);
							 $tuples=mysqli_num_rows($query_result1);
							 if($tuples>=1)
							 {
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
							 else
							 {
								 echo '<i><b style="color:red;"> Searched Results Not Found!!!...</b></i>';
							 }
					          
					 }
					 if($Select_Menu=='Course Name')
					 {
						$query="SELECT * FROM `AddTutors` WHERE Course LIKE '%$Search_Text%'";
						$query_result=mysqli_query($conn,$query);
						$tuples=mysqli_num_rows($query_result);
						if($tuples>=1)
						{
							while($rows=mysqli_fetch_assoc($query_result))
							{
								 $Tutor_Username=$rows['Username'];
								 $Course=$rows['Course'];
								 $CDescription=$rows['CDescription'];
								 $TutorId=$rows['Id'];
								 echo '<table frame="below" width="70%">';
								 echo '<tr><td width="50%"><h2><b style="color:#45B39D;">'.$Course.' Tutorial </b></h2>'.'By<b style="color:#2ECC71;">'.$Tutor_Username.'</b></td></tr>';
								 echo '<tr ><td><div style="background-color:#4ccc92;" border="1">';
								 echo '<p> Course Description:<b style="color:red;">'.$CDescription.'</b></p></div></td></tr>';
								 echo '<tr><td align="center"><a href="ShowLectures.php?id='.$TutorId.'" style="text-decoration:none;"><h3> GoTo Course...</h3></a></td></tr>';
								 echo '</table>';
								 
							}
						}
						else
						{
							echo '<i><b style="color:red;"> Searched Results Not Found!!!...</b></i>';
							
						}
						
					 }
					 if($Select_Menu=='Videos Names')
					 {
						 //echo 'searched for Videos Names...';
						 $query="SELECT * FROM `VideoLinks` WHERE VideoName LIKE '%$Search_Text%'";
						 $query_result=mysqli_query($conn,$query);
						 $tuples=@mysqli_num_rows($query_result);
						 if($tuples>=1)
						 {	
							$count=1;
							echo '<table>';
							while($rows=mysqli_fetch_assoc($query_result))
							{
								$VideoName=$rows['VideoName'];
								$VideoLink=$rows['VideoLink'];
								$VideoId=$rows['Id'];
								echo '<tr><td style="color:#e812b4;">'.$count++.'</td><td><a href="Watch.php?id='.$VideoId.'" style="text-decoration:none;"><b style="color:#1279e8;">'.$VideoName.'</b></a></td></tr>';
								echo '<br>';
								
							}
							echo '</table>';
							 
						 }
						 else
						 {
							echo '<i><b style="color:red;"> Searched Results Not Found!!!...</b></i>'; 
						 }
					 }
				 }
			 }
			 
			?>

	  
	  
	  </div>
	  
 </body>

</html>
 