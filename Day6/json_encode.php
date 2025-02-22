<?php
   $ary = array(
    [
      "name" => "Lynn",
      "age" => 33,
      "subject" => "C++, Python, Assembly",
      "address" => "No.48(C) San Yeik Nyein",
      "married" => "Yes",
      "children" => 2
    ],
    [
        "name" => "Htet",
        "age" => 35,
        "subject" => "Java, C#, Web Design",
        "address" => "No.48(C) San Yeik Nyein",
        "married" => true,
        "children" => 0
      ]
  ); 

  echo json_encode($ary);
?>