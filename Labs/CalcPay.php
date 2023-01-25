<?php
function calcPay($hours,$rate){
if($hours <= 60){
        $pay = $hours * $rate;
        echo ("You have worked $hours at an hourly rate of $rate. Your pay is $pay");
    } 
    else {
        $pay = 60 * $rate;
        echo ("You have worked more than 60 hours and your pay has been capped. your pay is $pay");
    }
}
calcPay(70, 10);
?>