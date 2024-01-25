<?php
if(isset($_POST['txt1'])){
echo "<center>";
echo "<b><u><font size=5>Registraion Form</font></b></u>";
$name=$_POST['txt1'];
$age=$_POST['txt2'];
$gender=$_POST['gender'];
echo "<table style='width:80%' border=5>";
echo "<tr><th>Name:</th><td>$name</td></tr>";
echo "<tr><th>Age:</th><td> $age</td></tr>";
echo "<tr><th>Gender:</th><td> $gender</td></tr>";
echo "</table>";
echo "</center>";
}
?>