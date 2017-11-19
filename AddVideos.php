<?php
 include 'Db.php';
 session_start();
 $id=$_SESSION['CourseId'];
 $Username=$_SESSION['username'];
 $CourseName=$_SESSION['CourseName'];
 $name=$_FILES['FiletoUpload']['name'];
 $tmp_name=$_FILES['FiletoUpload']['tmp_name'];
 $size=$_FILES['FiletoUpload']['size'];
 $VideoName=$_POST['VideoName'];
 if(isset($name) && isset($_POST['VideoName']))
 {
	 if(!empty($name) && !empty($VideoName))
	 {
		$dir='uploads/';
		if(move_uploaded_file($tmp_name,$dir.$name))
		{
			 echo 'Successfully uploaded!!!<br>';
			 $url="http://localhost/Project/uploads/".$name;
			 $query="SELECT * FROM `VideoLinks`";
			 $query_result=mysqli_query($conn,$query);
			 while($rows=mysqli_fetch_assoc($query_result))
			 {
				 $urlDb=$rows['VideoLink'];
				 if($url==$urlDb)
				 {
					 rmdir($url);
					 die("<b style=\"color:red;\"> The Same Name already Exists in Our DB!!! Select Another Name</b>");
					 break;
					 
				 }
			 }
			 $query="INSERT INTO `VideoLinks`(`Id`, `Username`, `Course`, `VideoName`, `VideoLink`) VALUES ('','$Username','$CourseName','$VideoName','$url')";
			 $query_result=mysqli_query($conn,$query);
			 if($query_result)
			 {
				 echo 'Successfully inserted it into database';
				 echo '<i><b style="color:red;"> Wait for 5 secs......</b></i>';
				 echo '<meta http-equiv="Refresh" content="5; AddUpload.php?id='.$id.'"/>';
			 }
			 else
			 {
				 echo 'Error Occured in Inserting into database';
				 
			 } 
			  
		}
	 }
 }

?>