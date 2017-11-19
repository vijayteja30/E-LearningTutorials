<?php
 include 'Db.php';
 session_start();

?>


<html>
 <head>
   <title> Add Upload!!! </title>
   <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.css">
   <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.structure.css">
   <link rel="stylesheet" type="text/css" href="jqueryui/jquery-ui.theme.css">
   <script src="jquery-3.1.1.js"></script>
   <script src="jqueryui/jquery-ui.js"></script>
   <script type="text/javascript">
    $(function()
	{/*
		$(".delete").click(function()
		{
		
			alert("Are you ready Delete the File....");
			var parameter = '<?php echo $id;?>';
			//window.location = "http://localhost/Project/VideoDelete.php?id="+parameter;
			open("http://localhost/Project/VideoDelete.php?id="+parameter);
		});*/
	});
   
   
   </script>
   
   
 </head>
 <body>
   <div id="upload" style="height:200; width:800; color:#101AEF;">
     <table align='center' border=1>
		<form method="POST" action='AddVideos.php' enctype='multipart/form-data'>
		 <th align='center'><b style="color:#9AEF10;"> Upload Videos!!! </b></th>
		 <tr><td><input type='file' name='FiletoUpload'></td>
		     <td><input type='text' name='VideoName' placeholder='Enter video Name'></td>
		 </tr>
		 <tr><td><input type='submit' name='Upload' value='Upload'></td></tr>
		</form>
	 </table>
   
   </div>
   
   
   <div id="Tutorials List" style="width:800;">
    <?php
	 
	 if(isset($_GET['id']))
	 {
		 if(!empty($_GET['id']))
		 {
			 echo $_GET['id'];
			 $id=$_GET['id'];
			 $query="SELECT * FROM `AddTutors` WHERE id='$id'";
			 $query_result=mysqli_query($conn,$query);
			 while($rows=mysqli_fetch_assoc($query_result))
			 {
				echo $CourseName=$rows['Course'];
				$_SESSION['CourseName']=$CourseName;
				echo $CourseId=$rows['Id'];
				$_SESSION['CourseId']=$CourseId;
				
			 }
			 echo $Username=$_SESSION['username'];
			 $query="SELECT * FROM `VideoLinks` WHERE username='$Username' and course='$CourseName'";
			 $query_result=mysqli_query($conn,$query);
			 echo '<table align=\'center\'  border=1>';
			 echo '<center><th><b style="color:red;">List of '.$CourseName.'Tutorials</b></th></center>';
			 echo '<tr><td><b style="color:blue;"> ID </b></td>';
			 echo '<td><b style="color:blue;"> Username </b></td>';
			 echo '<td><b style="color:blue;"> CourseName </b></td>';
			 echo '<td><b style="color:blue;"> VideoName </b></td>';
			 echo '<td><b style="color:blue;"> VideoLink </b></td>';
			 echo '<td><b style="color:blue;"> Delete Operation</b></td>';
			 echo '<td><b style="color:blue;"> Watch Operation </b></td></tr>';
			 echo '<tr> </tr>';
			 echo '<tr> </tr>';
			 while($rows=mysqli_fetch_assoc($query_result))
			 {  $id=$rows['Id'];
				echo '<tr><td><b style="color:black;">'.$rows['Id'].'</b></td>';
				echo '<td><b style="color:black;">'.$rows['Username'].'</b></td>';
				echo '<td><b style="color:black;">'.$rows['Course'].'</b></td>';
				echo '<td><b style="color:black;">'.$rows['VideoName'].'</b></td>';
				echo '<td><b style="color:black;">'.$rows['VideoLink'].'</b></td>';
				echo '<td><b style="color:black;"><a href="VideoDelete.php?id='.$id.'"><button id="delete">Delete</button></a></b></td>';
				//echo '<td><b style="color:black;"><button class="delete">Delete</button></b></td>';
				//echo '<td><b style="color:black;"><a href="VideoEdit.php?id='.$id.'">Edit</a></b></td>';
				echo '<td><b style="color:black;"><a href="Watch.php?id='.$id.'"><button>watch</button></a></b></td></tr>';
			 }
			 echo '</table>';
			 
		 }
	 }
	?>
    
    
   
   </div>
   
 </body>

</html>