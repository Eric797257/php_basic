<?php
   /*$ary = array(
     "name" => "Lynn",
     "age" => 33,
     "subject" => "C++, Python, Assembly",
     "address" => "No.48(C) San Yeik Nyein",
     "married" => "Yes",
     "children" => 2
   ); 

   $str = "";

   $str .= "<coder>";
   foreach($ary as $key => $val) {
     $str .= "<".$key.">";
     $str .= $val;
     $str .= "</".$key.">";
   }
   $str .= "</coder>";
   
   $handler = fopen("waifer.xml", "w");
   fprintf($handler, "%s", $str);*/

   $file = "she.json";
   $handler = fopen($file, 'r');
   $json = fread($handler, filesize($file));
   
   $arys = json_decode($json);

   foreach($arys as $key=>$vals) {
       foreach($vals as $k=>$val) {
         //echo "Key is =>" . $k . " and value is => " . $val . "<br>";
         echo $val . "<br>";
       }
   }
?>