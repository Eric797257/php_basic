<?php
  $ary = array();
  echo count($ary) . "<br>"; //0

  array_push($ary, "One"); //Insert Data into Array
  array_push($ary, "Two");
  array_push($ary, "Three");

  echo count($ary) . "<br>";
  print_r($ary);

  array_shift($ary);
  echo count($ary) . "<br>";

  print_r($ary);
  echo $ary[1];
?>