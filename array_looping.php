<?php

$cars = array("Toyota", "Landcruiser", "Virgo", "Crown", "Jeep");

/*for($i = 0; $i < count($cars); $i++) {
    echo $cars[$i];
}*/

/*$i = 0;
while($i < count($cars)) {
    echo $cars[$i];
}*/

/*$i = 0;
do {
    echo $cars[$i];
    $i++;
}while($i < count($cars));*/

$ary = array(
    array("One", "Two", "Three", "Four", "Five", "Six"),
    array("Seven", "Eight", "Nine", "Ten", "Eleven"),
    array("Tweleve", "Thirteen", "Fourteen"),
);

echo count($ary);

for($i = 0; $i < count($ary); $i++) {
    for($j = 0; $j < count($array[$i]); $j++) {
        echo $ary[$i][$j] . " ";
    }
    echo "<hr>";
}

?>