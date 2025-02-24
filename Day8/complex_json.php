<?php

$ary = [
    ["One"=>1, "Tow=>2", "Three"=>3, "Four"=>4],
    ["One"=>1, "Tow=>2", "Three"=>3, "Four"=>4],
    ["One"=>1, "Tow=>2", "Three"=>3, "Four"=>    
      ["One"=>1, "Tow=>2", "Three"=>3, "Four"=>4],
      ["One"=>1, "Tow=>2", "Three"=>3, "Four"=>4],
      ["One"=>1, "Tow=>2", "Three"=>3, "Four"=>4]
    ]
];

$encode = json_encode($ary);
echo $encode . "<hr>";
$decode = json_decode($encode, true);
//print_r($decode);

foreach($decode as $val){
    foreach($val as $key => $data) {
        if(!is_array($data)) {
            echo "Key is " . $key . " and value is " . $data . "<br>";
        }else {
            foreach($data as $key => $item) {
                echo "Key is " . $key . "and value is " . $item . "<br>";
            }
        }
        echo "<hr>";
    }
    //echo $key . " " . $val . "<hr>";
}

//echo "<pre>" . print_r($ary, true) . "</pre>";