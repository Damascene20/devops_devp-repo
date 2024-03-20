<?php
if(isset($_POST['submit'])){
$dbconn=mysqli_connect("mysql-btech","root","","schooldb")or die(mysqli_connect_error()); // connect to database

// inserting in Database
$name=$_POST['fname'];
$regno=$_POST['regnum'];
$level=$_POST['level'];
$phone=$_POST['phone'];
$sql="INSERT INTO students SET names='$name',  regnumber='$regno'";
$quer =mysqli_query($dbconn,$sql);
header("location:index.php");
} ?>
<!DOCTYPE html> <html> <head> 	<title> Form to Register</title>
</head>  <body>  <table> <form action="" method="POST">
<tr><td>First Name</td><td><input type="text" name="fname" ></td></tr>
<tr><td>Reg Number</td><td><input type="text" name="regnum"></td></tr>
<tr><td><input type="submit" name="submit"></td>
<td><a  href="index.php">View</a></td></tr>
</form> </table></body> </html>
