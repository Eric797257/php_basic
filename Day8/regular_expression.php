<?php

//$var = "Brighter Myanmar 1";
//$var = "pph";
$var = "PHP";

//$bol = preg_match("/[0-9]/", $var);
//$result = preg_replace('/[[:alpha:]]/', "@", $var);
/*$data = preg_replace("/[[:space:]]/", "", $var);
$result = preg_match('/\s/', $data);*/
//$bol = preg_match('/p./p', $var);
//$bol = preg_match('/^.{2}$', $var);
//$bol = preg_match('/p{ph}*/', $var);
//$bol = preg_match('/p(ph)+/', $var);
//$bol = preg_match('/^$/', $var);
$bol = preg_match('/p\wp/i', $var);

echo $result ? "TRUE" : "FALSE";