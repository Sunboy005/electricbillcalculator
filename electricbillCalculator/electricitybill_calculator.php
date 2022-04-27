<?php
    function calcElectricityBill($units) {
        $bill = 0;
        if ($units <= 50) {
            $bill = $units * 3.50;
        } elseif ($units > 50 && $units <= 150) {
            $bill = (($units - 50) * 4.00) + (50 * 3.50);
        } elseif ($units > 150 && $units <= 250) {
            $bill = (($units - 100) * 5.20) + (100 * 4.00) + (50 * 3.50);
        }else{
            $bill = (($units - 250) * 6.50 )+ (100 * 5.20) + (100 * 4.00) + (50 * 3.50);
        }
        echo $bill;
    }

?>