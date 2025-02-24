<?php

$str = "We start learning PHP at 7:30 am and finish learning at 5:30pm";

preg_match_all("/(\d+:+\d+)\s*(am|pm)/",$str,$matches,PREG_SET_ORDER);

echo "<pre>" . print_r($matches, true). "<br>";

echo "<hr>";

preg_match_all("/(\d+:+\d+)\s*(am|pm)/",$str,$matches,PREG_PATTERN_ORDER);
echo "<pre>" . print_r($matches, true). "<br>";