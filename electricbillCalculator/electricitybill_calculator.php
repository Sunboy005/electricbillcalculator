<?php
    function calcElectricityBill($units) {
        $bill = 0;
        if ($units <= 50) {
            $bill = $units * 3.50;
        } elseif ($units > 50 && $units <= 150) {
            $bill = (($units - 50) * 4.00) + (50 * 3.50);
        } elseif ($units > 150 && $units <= 250) {
            $bill = (($units - 150) * 5.20) + (100 * 4.00) + (50 * 3.50);
        }else{
            $bill = (($units - 250) * 6.50 )+ (100 * 5.20) + (100 * 4.00) + (50 * 3.50);
        }
        echo '
            <div class="bg-light text-center">  
                <h2 class="text-primary">Your bill is:<span class="text-danger text-right">  &#8358;'.number_format($bill,2).'</span></h2>
            </div>';
                
    }

?>