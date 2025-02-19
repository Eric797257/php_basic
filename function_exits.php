<?php
  
function doIt() {
    echo "I am doit function.";
}

$var = "dot";

function_exists($var) ? ($var) : "No function with that name";

?>