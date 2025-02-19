<?php

/*$ary = array("One", "Two", "Three");

foreach($ary as $item) {
    echo $item . "<br>";
}*/

$ary = array("first"=>"Toyota", "second"=>"Landcruiser","Third"=>"Prado","Fourth"=>"Vigo");

foreach($ary as $key=>$val) {
    echo "Key is => " . $key . "<br>";
    echo "Value is => " . $val . "<br>";
    echo "Key is => " . $key . " value is => " . $val . "<br>";
}

?>