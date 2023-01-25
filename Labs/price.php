<?php
$product_name = 'Monitors';

switch($product_name)
{
case 'Video_cards':
echo ('Video cards range from 50-100');
break;
case 'Monitors':
echo ('LCD monitors range from 200-400');
break;
case 'Processor':
echo ('Intel processors range from 100-1000');
break;
default:
echo ('Sory we do nto carry this prouct');
}

?>