<?php
$counter =1;

echo("<table border =1>");
echo("<tr><th>Counter</th>");
echo("<th>Square</th>");
echo("<th>Cube</th></tr>");

while($counter<=100){
echo ("<tr><td>");
echo ($counter);

echo ("</td><td>");
echo ($counter*$counter);

echo ("</td><td>");
echo ($counter*$counter*$counter);
echo ("</tr></td>");
$counter++;
}
echo ("</table>");

?>