<?php

$file = "text.txt";
$h = fopen($file, 'a');
fwrite($h, "Hello motherfucker");
fclose('$h');

?>