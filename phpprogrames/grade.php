<?php
$servername="localhost";
$username="root";
$password="";
$dname="php";
$conn=new mysqli($servername,$username,$password,$dname);
if($conn->connect_error)
{
die("Coonection failed".$conn->connect_error);
}
else{
if(isset($_POST['submit'])){
$n=$_POST['txt1'];
$g=$_POST['txt2'];
$sql="INSERT INTO grade(Name,Grade) VALUES ('$n','$g') ";
$result=mysqli_query($conn,$sql);
if($result){
	echo "New record added";
}
else{
	echo mysqli_error($conn);
}
}
}
?>

