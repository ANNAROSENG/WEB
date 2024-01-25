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
$r=$_POST['txt1'];
$n=$_POST['txt2'];
$c=$_POST['txt3'];
$s=$_POST['txt4'];
$p=$_POST['txt5'];
$sql="INSERT INTO student VALUES ('$r','$n','$c','$s','$p')";
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