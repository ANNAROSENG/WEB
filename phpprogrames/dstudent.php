<?php
$conn=mysqli_connect("localhost","root","","php") or die("unable to connect:");
$query="select * from student";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
	echo $row['Rollno'];
	echo " ".$row['Name'];
	echo " ".$row['Course'];
	echo " ".$row['Semester'];
	echo " ".$row['PhoneNo'];
	echo "<br>";
}
?>