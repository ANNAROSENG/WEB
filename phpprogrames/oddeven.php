<?php
if(isset($_GET['txt'])){
echo "<b><u>Number is odd or even</u></b><br>";
$n = $_GET['txt'];
if ($n % 2 == 0){
	echo "$n is even";
}
else{
	echo "$n is odd";
}
}
?>