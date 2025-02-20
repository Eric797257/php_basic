<?php
 
function myFunc() {
    STATIC $var = 0;
    $var++;
    echo $var;
}

myFunc();
echo "<br>";
myFunc();
echo"<br>";
myFunc();
echo"<br>";

?>