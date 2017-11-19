<?php
 session_start();
 include 'Db.php';
 $id=$_SESSION['id'];
 $query="SELECT * FROM `instructors` WHERE id='$id'";
 $query_result=mysqli_query($conn,$query);
 while($rows=mysqli_fetch_assoc($query_result))
	{
		$Username=$rows['Username'];
		$_SESSION['username']=$Username;
	}
 if(empty($_SESSION['id']))
  {
   die("Please Login!!!");  
  }
  else
  {
   //echo 'you\'re successfully logged in!!!';
   
  }
?>


<html>
 <head>
  <title> Instructors Video Lectures!!!!</title>
  <link rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
  <link rel="stylesheet" href="jqueryui/jquery-ui.css">
  <link rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
  <script src="jquery-3.1.1.js"> </script>
  <script src="jquery-3.1.1.min.js"> </script>
  <script src="jqueryui/jquery-ui.js"> </script>
  <script type='text/javascript'>
    $(document).ready(function()
	 {
	  $("#tabs").tabs({active:1,collapsible:true,event:"mouseover"});
	 });
  </script>
 </head>
 <body>
  <div>
	  <div id="tabs">
	    <ul>
		  <li> <a href="#Add"> Add New Tutorials </a></li>
		  <li> <a href="#Existing"> Add to Existing </a></li>
		  <li> <a href="#Logout"> Logout </a></li>
		  
		</ul>
		<div id='Add'>
		  <h1>Add New Tutorials</h1>
		  <table align='center'>
		   <form method='POST' action='AddTutor.php'>
				<th><b style='color:#3AC717;'>Add New Tutors!!!</b></th>
				<tr><td style="color:#C717C2;"> Course Name: </td>
					<td><input type='text' name='CourseName'></td>
				</tr>
				<tr><td></td><td></td></tr>
				<tr><td style='color:#C717C2;'> Description </td>
				  <td ><textarea rows='8' cols='25' name='CDescription'></textarea></td> 
				</tr>
				<tr><td><input type='submit' value='Add Tutor'></td></tr>
		   
		   </form>
		   
		  </table>
		  
		  
		</div>
		<div id='Existing'>
		  <h1>Add to Existing Tutorials</h1>
		  
		  <a href='AddExisting.php'><b style="color:red;">Show My List of Tutors</b></a>
		  
		</div>
		<div id='Logout'>
		  <h1>Complaint to Admin</h1>
		  
		  <a href="Instructor_Logout.php">Logout</a>
		  
		</div>
		
	  </div>
	</div>
 
 </body>
</html>