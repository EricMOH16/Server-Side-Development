<?php
$month = date('F');
switch ($month)
{
case 'August':
echo ('Its August, so its really hot');
break;
case 'January':
echo ("Not August, it's $month so at least it's not in the peak of the heat");
}
?>