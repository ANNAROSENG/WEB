<?php
if(isset($_GET["click"]))
{
    $number=$_GET['SumDigit'];
    $num=$number;
    $sum=0;
    for($i=0;$i<=strlen($number);$i++,$number/=10)
    {
        $sum=$sum+$number%10;
    }
    echo"sum of digit $num is $sum";
}
?>
