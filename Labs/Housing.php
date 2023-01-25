<?php
$cost = 56;
$allowance = $cost*0.80;
switch('between')
{
case 'under':
if ($cost <= 33.64){
echo ("The cost is $cost and no allowance is to be paid");
}
break;
case 'over':
if ($cost >= 252){
echo ("The cost is $cost and a max allowance of 201.60 is paid");
}
case 'between':
if ($cost > 33.64 and $cost < 252){
echo ("The cost is $cost and your allowance is $allowance");
}

}

?>