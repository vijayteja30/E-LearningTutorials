<?php
 include 'Db.php';
 session_start();
 echo $id=$_SESSION['In_id'];
 $user=$_REQUEST['user'];
 if(empty($_SESSION['In_id']))
 {
	die("<b style=\"color:red;\">Please Give a Username and Mobile Number....!!!</b>");
 }
 if(isset($_POST['Dob']) &&isset($_POST['Email']))
 {
	$Dob=$_POST['Dob'];
	$Email=$_POST['Email'];
	if(!empty($Email) && !empty($Dob))
	{
		$query="SELECT * FROM `instructors` WHERE Dob='$Dob' and Email='$Email' and Id='$id'";
		$query_result=mysqli_query($conn,$query);
		$rows=mysqli_num_rows($query_result);
		if($rows==1)
		{
			header("Location: Instructor_Forgot4.php");
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
	  <script>
	    $(function()
		{
			$("#Dob").datepicker({changeYear:true,changeMonth:true,yearRange: "-100:+0",showWeek:true,weekHeader:"week",width:300,height:300,dateFormat: 'yy-mm-dd'});
		});
	  </script>
	</head>
	
	<body>
	  <center>
	    <table align='center'>
		 <form method='POST' action='Instructor_Forgot2.php'>
		   <th> Forgot Password</th>
		   <tr><td>Dob:</td><td><input type="text" name="Dob" id='Dob'></td></tr>
		   <tr><td>Email ID:</td><td><input type="email" name="Email"></td></tr>
		   <tr><td><input type='submit' name='Next' value='Next'></td></tr>
		 <form>
		</table>
	  </center>
	</body>
</html>