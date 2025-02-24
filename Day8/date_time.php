<?php

//Unix Time $tamp
//Coordinate Universal Time => Thursday 1 january 1970 UTC second

date_default_timezone_set('Asia/Rangoon');

$ary = getdate();
echo "<pre>" . print_r($ary,true). "</pre>";

echo $ary["seconds"];
echo"<hr>";
echo time();

?>