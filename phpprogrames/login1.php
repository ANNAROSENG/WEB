<html>
<head>
<title>login</title>
</head>
<body bgcolor="lavender">
<h1><center>ENTER DETAILS</center></h1>
<hr size="5" color="darkviolet">
<form action="login1.php" method="GET">
<center>
<table>
<tr><td><h2>roll no:</h2></td>
<td></td>
<td><input type="text" name="roll" required></td></tr> 
<tr><td><h2>name:</h2></td>
<td></td>
<td><input type="text" name="name" required></td></tr> 
<tr><td><h2>class:</h2></td>
<td></td>
<td><input type="text" name="class" required></td></tr> 
<tr><td><h2>Mark:</h2></td>
<td></td>
<td><input type="text" name="mark" required></td></tr> 
<tr><td><h2>Admission NO:</h2></td>
<td width="20"></td>
<td><input type="text" name="adm" required></td></tr> 
</table>
<input type="submit" name="submit">
</center>
</form>
<center>
<a href="login.html">back to login</a>
</center>
</body>
</html>
<?php
if(isset($_GET['submit']))
{
$servername="localhost";
$username="root";
$password="";
$dbname="php";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{

die("connection is failed ".$conn->connect_error);

}
else
{
$a=$_GET['roll'];
$b=$_GET['name'];
$c=$_GET['class'];
$d=$_GET['mark'];
$e=$_GET['adm'];

$sql="INSERT INTO students VALUES ('$a','$b','$c','$d','$e')";
$result=mysqli_query($conn,$sql);
if($result)
{
    echo"<script>alert('sucessfully added')</script>";


}
else
{
echo"error";

}

}

}
?>
