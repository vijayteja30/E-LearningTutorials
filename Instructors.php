<?php
 include 'Db.php';
 session_start();
 if(empty($_SESSION['id']))
 {
	die("Please Login");
 }
 
 $query="SELECT * FROM `instructors`";
 $query_result=mysqli_query($conn,$query);
 echo '<table align="center" border=1>';
 echo '<tr><td>Id</td><td>username</td><td>password</td><td>name</td><td>emailid</td><td>Dob</td><td>Gender</td><td>Mobile</td><td>Delete Instructor</td></tr>';
 while($row=mysqli_fetch_assoc($query_result))
 {
	echo "<tr><td>".$id=$row['Id']."</td>";
	echo "<td>".$username=$row['Username']."</td>";
	echo "<td>".$password=$row['Password']."</td>";
	echo "<td>".$name=$row['Name']."</td>";
	echo "<td>".$email=$row['Email']."</td>";
	echo "<td>".$dob=$row['Dob']."</td>";
	echo "<td>".$gender=$row['Gender']."</td>";
	echo "<td>".$Mobile=$row['Mobile']."</td>";
	echo "<td><a href='InstructorDelete.php?id=$id'>Delete</a></td></tr>";
 }
 echo '</table>';

?>
