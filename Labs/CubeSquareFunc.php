<?php
echo ("<table border=1>");
echo ("<tr><th>Number</th>");
echo ("<th>Square</th>");
echo ("<th>Cube</th></tr>");
function cubeSquare($x){

for($i=1; $i<=$x; $i++){
        echo ("<tr><td>");
        echo ($i);

        echo ("</td><td>");
        echo ($i * $i);

        echo ("</td><td>");
        echo ($i * $i * $i);

        echo ("</tr></td>");
}
    echo ("</table>");
}
cubeSquare(100);
?>