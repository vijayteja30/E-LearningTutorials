<?php
 session_start();
 include 'Db.php';
 $Username=$_SESSION['username'];
 $id=$_SESSION['id'];
 if(!empty($Username) && !empty($id))
 {
	 $query="SELECT * FROM `AddTutors` WHERE username='$Username'";
	 $query_result=mysqli_query($conn,$query);
	 
	 while($rows=mysqli_fetch_assoc($query_result))
	 {
		 $CourseName=$rows['Course'];
		 $id=$rows['Id'];
		 
		 echo '<a href="AddUpload.php?id='.$id.'"><b style="color:red;">'.$CourseName.'</b></a><br>';
	 }
 }
?>