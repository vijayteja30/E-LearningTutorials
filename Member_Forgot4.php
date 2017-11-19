<?php
 include 'Db.php';
 session_Start();
 $id=$_SESSION['id'];
 if(empty($_SESSION['id']))
 {
	die("<b style=\"color:red;\">Please Give a Date of Birth and Email Address...!!!</b>");
 }
 if(isset($_POST['Password']) &&isset($_POST['RPassword']))
 {
	$Password=$_POST['Password'];
	$RPassword=$_POST['RPassword'];
	if(!empty($Password) && !empty($RPassword))
	{
		if($Password==$RPassword)
		{
			$query="UPDATE `project`.`members` SET Password='$Password' where Id='$id' ";
			if(mysqli_query($conn,$query))
			{
				echo 'Successfully Updated You\'re Password';
				session_destroy();
				header("Location: Member_Login.php");
			}
			else
				echo 'Errror Occured in Updating';
		}
		else
		{
		  echo '<b style="color:red;">Password Doesn\'t Matched</b>';
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
	
	<body style="background-color:#919B99;">
	  <center>
	    <table align='center'>
		 <form method='POST' action='Member_Forgot4.php'>
		   <th> Forgot Password</th>
		   <tr><td>New Password:</td><td><input type="password" name="Password"></td></tr>
		   <tr><td>ReEnter Password:</td><td><input type="Password" name="RPassword"></td></tr>
		   <tr><td><input type='submit' name='Next' value='Next'></td></tr>
		 <form>
		</table>
	  </center>
	</body>
</html>