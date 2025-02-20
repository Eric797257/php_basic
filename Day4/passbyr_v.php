<?php

/*$a = 20;
$b = &$a;
$a = 40;

echo "Variable A value now is => " . $a;
echo "<br>";
echo "Variable B value now is => " . $b;*/

$age = 20;
function myFunc(&$age) {
    $age = 40;
    echo $age;
}

myFunc($age);
echo "<br>";
echo $age;

?>