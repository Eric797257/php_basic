<?php
  $num = 5000000;
  $city = "Yangon";
  $val = 50.5;

  echo "There are $num of people in $city. Double value is {$val}<br>";

  printf("There are %u of people in %s. Double value is %f", $num, $city, $val);

  $file = "test.txt";
  $handler = fopen($file, 'w');
  fprintf($handler, "There are %u of people in %s. Double value is %f", $num, $city, $val);
?>