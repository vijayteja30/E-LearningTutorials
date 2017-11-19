<?php
 include 'Db.php';
 session_start();
 if(isset($_SESSION['id']) && !empty($_SESSION['id']))
 {
	 header("Location: Instructor_Load.php");
 }
 else
 {
	 
	 if(isset($_POST['Username']) && isset($_POST['Password']))
	 {
		 $Username=$_POST['Username'];
		 $Password=$_POST['Password'];
		 if(!empty($Username) && !empty($Password))
		 {
			$query="select *from instructors where username='$Username' and password='$Password' ";
			$query_result=mysqli_query($conn,$query);
			$rows=mysqli_num_rows($query_result);
			if($rows==1)
			{
				while($result=mysqli_fetch_assoc($query_result))
				{
					$id=$result['Id'];
				}
				$_SESSION['id']=$id;
				header("Location: Instructor_Load.php");
			}
			else
			{
				echo '<strong color="red"><p style="color:\'red\'">Please check username or password</p></strong>';
		
			}
		 }
	 }
?>

<html>
  <head>
    <title> Instructor Login!!! </title>
    <style>
      a{
      	text-decoration: none;
      	color:black;
       }
       table{
       			width:180;
       			height:200;
       			background-color:   #FF5733  ;
       		} 
    </style>
  </head>
  <body>
  	<br><br><br><br><br><br><br><br><br><br><br>
  	<center>
  	<div >
  		<table >
	  		<form action='Instructor_Login.php' method='POST'>
	  			<th><td><center> <b>Instructor Login</b></center></td></th>
	  			<tr align='center'>
	              <td>Username</td>
	              <td><input type='text' name='Username' placeholder='Username'></td>
	  			</tr>
	  			<tr align='center'>
	  			  <td>Password</td>
	  			  <td><input type='password' name='Password' placeholder='Password'></td>
	  			</tr>
	  			<tr align='center'>
                  <td><input type='submit' value='Login'></td></tr>
                  <tr><td> </td><td><a href='Instructor_Forgot1.php' >Forgot Password</a></td>
                  <td><a href='Instructor_Register.php' >Register</a></td>
	  			</tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
	  		</form>
  		</table>
  	</div>
  	</center>
  </body>

</html>

 <?php } ?>