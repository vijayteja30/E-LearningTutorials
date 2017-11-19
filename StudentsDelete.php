<?php
 include 'Db.php';
 session_start();
 if(empty($_SESSION['id']))
 {
	die("Please Login");
 }
 if(isset($_GET['id']))
 {
	 $id=$_GET['id'];
	 if(!empty($id))
	 {
		 //echo $id;
		 $query="DELETE FROM `members` WHERE id='$id'";
		 $query_result=mysqli_query($conn,$query);
		 if($query_result)
		 {
			 echo '<center><b><i>Successfully deleted the Member wait for 3 secs...</i></b></center>';
			 echo '<meta http-equiv="Refresh" content="3; Students.php"/>';
		 }
		 
		 
	 }
 }
?>