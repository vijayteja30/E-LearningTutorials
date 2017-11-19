<?php
 include "Db.php";
 ob_start();
 session_start();
 if(isset($_SESSION['id']) && !empty($_SESSION['id']))
 {
	header("Location: Admin_Load.php"); 
 }
 else
 {
	 if(isset($_POST['Username']) && isset($_POST['Password']))
	 {
		$Username=$_POST['Username'];
		$Password=$_POST['Password'];
		if(!empty($Username) && !empty($Password))
		{
			$query="SELECT id FROM `admin` WHERE username='$Username' and password='$Password'";
			$query_result=mysqli_query($conn,$query);
			$rows=mysqli_num_rows($query_result);
			if($rows==1)
			{
				echo 'YOU are successfully logged in';
				while($result=mysqli_fetch_assoc($query_result))
				{
					 $id=$result['id'];
				}
				$_SESSION['id']=$id;
				header("Location: Admin_Load.php");
			}
			else
				echo '<strong color="red"><p style="color:\'red\'">Please check username or password</p></strong>';
		}
	 }
 

?>

<html>
  <head>
    <title> Admin Login!!! </title>
    <style>
      a{
      	text-decoration: none;
      	color:black;
       }
       table{
       			width:180;
       			height:180;
       			background-color:#d4e6f1 ;
       		} 
    </style>
  </head>
  <body style="background-color:#919B99;">
    
  	<br><br><br><br><br><br><br><br><br><br><br>
  	<center>
  	<div >
  		<table  >
	  		<form action='Admin.php' method='POST'>
	  			<tr><td> Admin Login</td></tr>
	  			<tr align='center'>
	              <td>Username</td>
	              <td><input type='text' name='Username' placeholder='Username'></td>
	  			</tr>
	  			<tr align='center'>
	  			  <td>Password</td>
	  			  <td><input type='password' name='Password' placeholder='Password'></td>
	  			</tr>
	  			<tr align='center'>
                  <td><input type='submit' value='Login'></td>
                  <!--<td><a href='Member_Forgot1.php' >Forgot Password</a></td>
                  <td><a href='Member_Register.php' >Register</a></td>-->
	  			</tr>
	  		</form>
  		</table>
  	</div>
  	</center>
  </body>

</html>
 <?php } ?>