<?php

function createFile($filename) {
    $h = fopen($filename, 'w');
    fclose($h);
}

function writeFile($filename, $data) {
    $h = fopen($filename, 'w');
    fwrite($h, $data);
    fclose($h);
}

function appendFile($filename, $data) {
    $h = fopen($filename, 'a');
    fwrite($h, $data);
    fclose($h);
}

function readMyFile($filename) {
    $h = fopen($filename, 'r');
    $size = filesize("$filename");
    $data = fread($h, $size);
    fclose($h);
    return $data;
}

createFile("Mine.txt");
writeFile("text.txt", "I am good");
appendFile("text.txt", "Bad!");
readMyFile("text.txt");

?>