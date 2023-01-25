<?php
$balance = 100000;
$rate = 0.05;
$year = 2023;

while($balance >= 12000){
$year++;
$balance += $balance*$rate-12000;
}
echo ("The first year where 1200 canot be withdrawn is $year");

?>