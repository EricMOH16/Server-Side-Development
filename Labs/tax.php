<?php

$income = 296001;
if($income<=14800.00 ){
$taxRate=20;
}
elseif($income>=14800.01 and $income <=29600.00){
$taxRate=42;
}
else{
$taxRate = 50;
}

echo $taxRate;
?>