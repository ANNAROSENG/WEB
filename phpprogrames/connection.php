<?php
$servername="localhost";
$username="root";
$password=" ";
$dname="php";
$conn=new mysqli($servername,$username,$password,$dname);
if($conn->connect_error)
{
die("Coonection failed".$conn->connect_error);
}
else{
echo "Connection Success";
}
?>