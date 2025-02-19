<?php

for($i = 0; $i <= 100; $i++) {
    if($i == 30) {
        echo "<p style='background:yellow'>I am the most important number now</p>";
        continue;
    }else {
        echo "I value is not 30, but it is $i <br>";
    }
}