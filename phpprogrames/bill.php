<?php
if(isset($_GET['txt'])){

	$units=$_GET['txt'];
    $unit_first = 3.50;
    $unit_second = 4.00;
    $unit_third = 5.20;
    $unit_fourth = 6.50;

    if($units<= 50){
        $bill = $units * $unit_first;
        echo "Amount: $bill";
    }
    else if($units > 50 && $units <= 100) {
        $temp = 50 * $unit_first;
        $remaining_units = $units - 50;
        $bill = $temp + ($remaining_units * $unit_second);
        echo "Amount: $bill";
    }
    else if($units > 100 && $units <= 200) {
        $temp = (50 * 3.5) + (100 * $unit_second);
        $remaining_units = $units - 150;
        $bill = $temp + ($remaining_units * $unit_third);
        echo "Amount: $bill";
    }
    else {
        $temp = (50 * 3.5) + (100 * $unit_second) + (100 * $unit_third);
        $remaining_units = $units - 250;
        $bill = $temp + ($remaining_units * $unit_fourth);
        echo "Amount: $bill";
    }
}

?>
