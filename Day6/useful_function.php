<?php
   /*$str = "There are 5000000 of people in Yangon. Double value is 50.500000.";

   echo $str . "<br>";
   echo lcfirst($str) . "<br>";
   echo ucwords($str) . "<br>";
   echo strtoupper($str) . "<br>";
   echo strtolower($str);*/

   /*$str = " Hello ";
   $str = " Hello/";
   echo strlen($str) . "<br>";
   $var = trim($str);
   $var = rtrim($str, "/");
   $var = ltrim($str);
   echo strlen($var);*/

   /*$pass = "123123";
   $pass = md5($pass, true);
   echo $pass . "<br>";
   $pass = sha1($pass, true);
   echo $pass . "<br>";
   $pass = crypt($pass, "bm");
   $pass = crypt($pass, $pass);
   echo $pass;
   */

   /*$num = 5000000;
   echo $num . "<br>";
   echo number_format($num) . "<br>";
   echo number_format($num, "2") . "<br>";
   echo number_format($num, "1") . "<br>";
   echo number_format($num, "1", ".", ",") . "<br>";*/

   /*$str1 = "What are u doing";
   $str2 = "What are u doing";

   echo strcmp($str1, $str2);

   if($var == 0) 
      echo "Same";*/

   /*$str = "A the removes whitespace or other predefined characters from the left side of a string";

   echo strpos($str, "the") . "<br>";
   echo strrpos($str, "the") . "<br>";
   echo stripos($str, "The") . "<br>";
   echo strripos($str, "The") . "<br>";
   echo strlen($str);*/

   $str = "A the removes whitespace or other predefined characters from the left side of a string";
   
   $var = str_word_count($str);
   $var = substr($str, 0, 10);
   $var = substr($str, 20, strlen($str));
   $var = chunk_split($str, 5, "-");
   echo $var;
   
?>