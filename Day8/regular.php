<?php

/*$var = "PHP@gmail.com";

$result = preg_match("/^[a-zA-Z]+@[a-z] +\.[a-z]{3}$/", $var);
echo $result ? "TRUE" : "FALSE";*/

/*$var = "Your Breakfast will include some rice and boile bean and palatar";

if(preg_match('/rice/',$var))
   echo "We got rice for our breakfast.<hr>";

if(preg_match("/bean/", $var))
   echo "We got bean in our breakfast.<hr>";*/

/*$var = "Birghter Myanmar Copyright @ 2009";

$result = preg_replace("/[[:digit:]]+/", "2011", $var);

echo $result;*/

/*$var = "Birghter Myanmar Copyright @ 2009";
$result = preg_replace(
      array('/copyright/i','[0-9]+/'),
      array('Computer Class', '2011'),
      $var
);
echo "<pre>".print_r($result, true)."</pre>";*/

/*$var = "My Phone Number is 09259165884";
$result = preg_replace("/[[:alpha:]]/", "", $var);
echo "<pre>" . print_r($result, $true)."</pre>";*/

/*$var = "My Phone Number is 09259165884";
$result = preg_replace("/[[:alpha:]]/", "", $var);
$phonenum = preg_replace("/[[:space:]]/","",$result);
echo $phonenum;*/

/*$var = "<span style='color:red'>Biberkolar</span>";
$result = preg_replace("/<span style='color:red'>.<\/span>/","",$var);
echo $result;*/

$str = "A.d";

$bol = preg_match('/([^a-z]+)\.([a-z]*)/',$str);
echo $bol ? "TRUE" : "FALSE";
/*$ary = preg_split("/[\s,]/",$str,0,PREG_SPLIT_NO_EMPTY);
$ary = preg_split("//",$str,5,PREG_SPLIT_OFFSET_CAPTURE);
$ary = preg_split("//",$str,5,PREG_SPLIT_NO_EMPTY);
$ary = preg_split("//",$str,5,PREG_SPLIT_DELIM_CAPTURE);

echo "<pre>".print_r($ary, true). "</pre>";*/