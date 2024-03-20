<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
</head>
<body>
<form method="POST" >

<table>
<?php
$id=$_GET['id'];
$conn=mysqli_connect("mysql-btech","root","","schooldb")or die(mysqli_connect_error()); // connect to database
$sql="SELECT * FROM students WHERE id= $id";
$query=mysqli_query($conn,$sql);
while($data=mysqli_fetch_assoc($query)){
	?>
<tr><td>First Name</td><td><input type="text" name="fnames"  value="<?=$data['names'];?>" ></td></tr>
<tr><td>REG NUMBER</td><td><input type="text" name="regnum"  value="<?=$data['regnumber'];?>" ></td></tr>	
<tr> <td><input type="submit" name="submit"  value="Update"></td></tr>
           <?php
}if (isset($_POST['submit'])) {
	$newname=$_POST['fnames'];
	$newregno=$_POST['regnum'];
	
// Query to UPDATE in table call students	
$sql1="UPDATE students SET names='$newname', regnumber='$newregno' WHERE id=$id";
$query=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
//header("location:./index.php");
}?>
</table>
<a href="index.php">Back Home</a> 
</form>
</body>
</html>
