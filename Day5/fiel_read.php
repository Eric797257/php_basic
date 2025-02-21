<?php

$file = "text.txt"; // file path
$handler = fopen($file, 'r'); //file open(file,'wra')
$size = filesize($file);  //getting File Size
$data = fread($handler, $size); //reading file
echo $data;

?>