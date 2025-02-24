<?php

#positive look ahead
/*$str = "ABC";

$bol = preg_match('/A(?=\d)/', $str);

echo $bol ? "TRUE" : "FALSE";*/

#positive look behind
/*$str = "ABC";

$bol = preg_match('/(?<=B)C/', $str);

echo $bol ? "TRUE" : "FALSE";*/

#negative look ahead
/*$str = "ABC";

$bol = preg_match('/A(?!B)/', $str);

echo $bol ? "TRUE" : "FALSE";*/

#negative look behind
/*$str = "ABC";

$bol = preg_match('/(?<!B)C/', $str);

echo $bol ? "TRUE" : "FALSE";*/

$password = "mgmg123mgmgA_";

$bol = preg_match('/(?=.*[a-z]) (?=.*[A-Z]) (?=.*\d) (?=.*(_ | [^\w]))/', $password);

echo $bol ? "TRUE" : "FALSE";
