<?php 
if(isset($_GET['txt'])){
$limit=$_GET['txt'] ;
$n1 = 0;  
$n2 = 1;  
echo "<h3>Fibonacci series upto :$limit </h3>";  
echo "<br>";  
echo $n1.' '.$n2.' '; 
$n3 = $n2 + $n1;
$n4=2;
while ($n4<$limit)  
{    
    echo $n3.' ';  
    $n1 = $n2;  
    $n2 = $n3;  
    $n3= $n1+$n2; 
    $n4=$n4+1;
} 
}
?>  