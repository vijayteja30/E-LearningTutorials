<?php
  include 'Db.php';
	if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Username']) && isset($_POST['Gender']) &&
		 isset($_POST['Password']) && isset($_POST['Rpassword']) && isset($_POST['Dob']) && isset($_POST['Mobile']))
	{
		 $Name=$_POST['Name'];
		 $Email=$_POST['Email'];
		 $Username=$_POST['Username'];
		 $Password=$_POST['Password'];
		 $Rpassword=$_POST['Rpassword'];
		 $Gender=$_POST['Gender'];
		 echo $Dob=$_POST['Dob'];
		 $Mobile=$_POST['Mobile'];
		if(!empty($Name) && !empty($Email) && !empty($Username) && !empty($Password) && !empty($Rpassword) && !empty($Gender)
			&& !empty($Dob) && !empty($Mobile))
		{
			
			if($Password==$Rpassword)
			{
				$query="select * from instructors where Username='$Username'";
				$query_result=mysqli_query($conn,$query);
				$rows=mysqli_num_rows($query_result);
				if($rows>=1)
				{
					echo 'Already The username exists';
				}
				else if($rows==0)
				{
					$query_insert="INSERT INTO `project`.`instructors` (`Name`, `Email`, `Username`, `Password`, `Dob`, `Gender`, `Mobile`, `id`) VALUES ('$Name', '$Email', '$Username', '$Password', '$Dob', '$Gender', '$Mobile', NULL)";
					if(mysqli_query($conn,$query_insert))
					{
						echo 'Successfully Registered';
						header("Location: Instructor_Login.php");
					}
					else
						echo 'Unsuccess';
				}
			}
			else
			{
				echo 'Invalid Password';
			}
		}
		else
		{
			echo 'Please fill in all details<br>';
		}
			
	}
	

?>


<html>
 <head>
  <title>Instructor Registration!!!</title>
  <style>
  	table{
       			width:200;
       			height:400;
       			background-color:  #FF5733  ;
       		} 
  </style>
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
 		<table>
 			<form method='POST' action='Instructor_Register.php'>
	 			<tr align='center' >
	 				<td>Name</td>
	 				<td> <input type='text' name='Name'> </td>
	 			</tr>
	 			<tr align='center' >
	 				<td>Email ID</td>
	 				<td>  <input type='email' name='Email'> </td>
	 			</tr>
	 			<tr align='center' >
	 				<td>Username</td>
	 				<td>  <input type='text' name='Username'> </td>
	 			</tr>
	 			<tr align='center' >
	 				<td>Password</td>
	 				<td>  <input type='password' name='Password'> </td>
	 			</tr>
	 			<tr align='center' >
	 				<td>Retype Password</td>
	 				<td>  <input type='password' name='Rpassword'> </td>
	 			</tr>
	 			<tr align='center' >
	 				<td>DOB</td>
	 				<td>  <input type='text' name='Dob' id='Dob'> </td>
	 			</tr>
	 			<tr align='center' >
	 				<td>Gender</td>
	 				<td>  <input type='radio' name='Gender' value='m'>Male
	 				 <input type='radio' name='Gender' value='f'>Female </td>
	 			</tr>
	 			<tr align='center' >
	 				<td>Mobile No.</td>
	 				<td>  <input type='text' name='Mobile' > </td>
	 			</tr>
	 			
	 			<tr>
	 				<td><input type='submit' value='Register'></td>
	 			</tr>
 			</form>	
 		</table>
 	</center>
 </body>
</html>