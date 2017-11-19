<?php
 include 'Db.php';
 session_start();
 if(isset($_POST['Username']) &&isset($_POST['Mobile']))
 {
	$Username=$_POST['Username'];
	$Mobile=$_POST['Mobile'];
	if(!empty($Username) && !empty($Mobile))
	{
		$query="SELECT * FROM `instructors` WHERE username='$Username' and mobile='$Mobile'";
		$query_result=mysqli_query($conn,$query);
		$rows=mysqli_num_rows($query_result);
		if($rows==1)
		{
			while($fetch=mysqli_fetch_array($query_result))
			{
				$id=$fetch['Id'];
				$_SESSION['In_id']=$id;
				
			}
			header("Location: Instructor_Forgot2.php");
		}
		else
		{
		  echo '<b style="color:red;">Invalid Details you entered</b>';
		}
	}
 }
?>







<html>
	<head>
	  <title> Forgot Password</title>
	  <link rel="stylesheet" href="jqueryui/jquery-ui.structure.css">
	  <link rel="stylesheet" href="jqueryui/jquery-ui.css">
	  <link rel="stylesheet" href="jqueryui/jquery-ui.theme.css">
	  <script src="jquery-3.1.1.js"> </script>
	  <script src="jquery-3.1.1.min.js"> </script>
	  <script src="jqueryui/jquery-ui.js"> </script>
	</head>
	
	<body>
	  <center>
	    <table align='center'>
		 <form method='POST' action='Instructor_Forgot1.php'>
		   <th> Forgot Password</th>
		   <tr><td>Username:</td><td><input type="text" name="Username"></td></tr>
		   <tr><td>Mobile NO:</td><td><input type="text" name="Mobile"></td></tr>
		   <tr><td><input type='submit' name='Next' value='Next'></td></tr>
		 <form>
		</table>
	  </center>
	</body>
</html>