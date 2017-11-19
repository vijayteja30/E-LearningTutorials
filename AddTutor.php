<?php
 session_start();
 include 'Db.php';
 if(isset($_POST['CourseName']) && isset($_POST['CDescription']))
 {
	$CourseName=$_POST['CourseName'];
	$CDescription=$_POST['CDescription'];
	if(!empty($CourseName) && !empty($CDescription))
	{
		echo $id=$_SESSION['id'];
		$query="SELECT * FROM `instructors` WHERE id='$id'";
		$query_result=mysqli_query($conn,$query);
		while($rows=mysqli_fetch_assoc($query_result))
		{
			$Username=$rows['Username'];
			echo $_SESSION['username']=$Username;
		}
		$FolderName=$Username.'_'.$CourseName;
		$query1="INSERT INTO `AddTutors`(`Id`, `Username`, `Course`, `CDescription`, `Folder`) VALUES ('','$Username','$CourseName','$CDescription','$FolderName')";
		$query_result1=mysqli_query($conn,$query1);
		if($query_result1)
		{
		   echo '<b style="color:\"green\";">'.'Wait For 5 Secs...'.'</b>';
		   echo '<meta http-equiv="Refresh" content="5; Instructor_Load.php"/>';
		}
		
	}
 }
?>