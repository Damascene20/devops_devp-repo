<?php 
if (isset($_POST['Yes'])) {
$user= $_GET['id'];
//echo $user;
// Query to connect to Database
$conn=mysqli_connect("mysql-btech","root","","schooldb")or die(mysqli_connect_error()); // connect to database
$sql="DELETE FROM students WHERE id=$user";
$query=mysqli_query($conn,$sql);
header("location:index.php");
}  
?>
<html> <heard><title> Delete</title></head>
<body>
	<p style="color: red">Are you sure to delete ?</p>
	<form method="post"> 	<center> 
<table ">
<tr><td> <input type="submit" name="Yes" value="Yes" > </td>
 <td> <a href="index.php">No</a> </td> </tr>
</table>
</center></form></body> </html>
