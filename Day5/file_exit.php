<?php

/*function readMyFile($filename) {
    if(file_exists($filename)) {
        $handler = fopen($filename, 'r');
        $size = filesize($filename);
        $data = fread($handler, $size);
        return $data;
    }
    else {
        echo "File not Found.";
    }
}*/

function readMyFile($filename) {
    if(file_exists($filename)) {
        $data = file_get_contents($filename);
        return $data;
    }else {
        echo "File not Found.";
    }
}

echo readMyFile("bla.txt");

?>