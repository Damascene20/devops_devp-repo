<?php
if (isset($_GET['id'])) {
	$get_id=$_GET['id'];
	$conn=mysqli_connect("mysql-btech","root","","schooldb");
	$sql="SELECT * FROM students WHERE id=$get_id";
	$query=mysqli_query($conn,$sql) or die(mysqli_error($conn));
	if($query){
		while($row=mysqli_fetch_assoc($query)){
			$id=$row['id'];
			$name=$row['names'];
			$Regnoo=$row['regnumber'];
			
			?>
<!DOCTYPE html>
<html>
<head>
	<title> VIEW</title>
</head>
<body>
<table border="1">
	<tr>  <td>ID</td><td><?=$id;?></td> </tr>
	<tr> <td>Full Name</td> <td><?=$name;?></td> </tr>
	<tr> <td>REG NUMBER</td> <td><?=$Regnoo;?></td> </tr>
	
	</table>
    <a href="index.php">Back Home</a> 
</table>

</body>
</html>
		<?php
		}  } } ?>
