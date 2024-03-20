<?php
if(isset($_POST['submit'])){
$conn=mysqli_connect("mysql-btech","root","","schooldb")or die(mysqli_connect_error()); // connect to database
    // inserting in Database
$name=$_POST['names'];
$regn=$_POST['regnumber'];

$sql="INSERT INTO students SET names='$name',  regnumber='$regn'";
$quer =mysqli_query($conn,$sql);
//header("location:index.php");
} ?>
<!DOCTYPE html> <html> <head> 	<title> Form to Register</title>
</head>  <body>  <table> <form action="" method="POST">
<tr><td>First Name</td><td><input type="text" name="names" ></td></tr>
<tr><td>REG NUMBER</td><td><input type="text" name="regnumber"></td></tr>
<tr><td><input type="submit" name="submit"></td>
<td><a  href="index.php">View</a></td></tr>
</form> </table></body> </html>
