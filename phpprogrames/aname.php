<?php
$student=array("Johny","Rahul","Kichu","Midhun","Ammu");
print_r($student);
echo "<br>The array in acending order:";
asort($student);
print_r($student);
echo "<br>The array in decending order:";
rsort($student);
print_r($student);
echo "<br>";
?>