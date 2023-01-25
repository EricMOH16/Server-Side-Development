<?php
echo("<table border =1>");
echo("<tr><th>Counter</th>");
echo("<th>Square</th>");
echo("<th>Cube</th></tr>");

for($counter =1; $counter<=100; $counter++ ){
echo ("<tr><td>");
echo ($counter);

echo ("</td><td>");
echo ($counter*$counter);

echo ("</td><td>");
echo ($counter*$counter*$counter);
echo ("</tr></td>");

}
echo ("</table>");
?>