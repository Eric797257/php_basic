<?php

//$str = "There is a $40 man in the lane!";
$str = "There is a 40 man in the lane";
echo $str . "<br>";

//$result = preg_quote($str);
$result = preg_quote($str,'4');
echo $result;