<?php
   $doc =<<<ST
     <h1>Welcome To Our Website</h1>
     <p>We created website for you</p>
     <p>We have best skillfull developer in Myanmar</p>
     <b>That is all we want to tell you</b>;
     <i><br>Your Sincely</i>
     <h2>Waiferkolar</h2>
ST;

// if/else statement
if(4 > 5) {
  echo "true";
}else {
  echo "false";
}

$num1 = 30;
$num2 = 40;

$bol = $num1 == $num2;

if($bol) {
  echo "It is true";
}else {
  echo "It is false";
}

//ternary operator
$bool = 32 == 33;
echo $bool ? "You are right" : "You are wrong";
?>