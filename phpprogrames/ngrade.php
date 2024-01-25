<?php
$conn=mysqli_connect("localhost","root","","php") or die("unable to connect:");
$query="select * from grade";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
	echo $row['Name'];
	echo " ".$row['Grade'];
	echo "<br>";
}
?>