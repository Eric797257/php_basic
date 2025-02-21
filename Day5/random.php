<?php

$var = rand();
echo $var . "<br>";
$end = getrandmax();
echo $end;

echo rand(1, 6);

srand(microtime() * 1000000);
echo rand();
echo "<br>";
echo mt_rand();

?>