<?php

define("DB_HOST", "localhost");
define("DB_NAME", "best");
define("DB_USER", "root");
define("DB_PASS", "");

function dbConnect() {
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno() > 0)
       die("Connection Failed!");
    else
       return $db;

   }

function passGen($pass) {
    $pass =md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);
    return $pass;
 }
function errorDebugger($data) {
    echo "<pre>" .print_r($data,true) . "</pre>";
   }

$tutorials = json_decode(file_get_contents("tutorials.json"));


$db = dbConnect();

$qry = "SELECT * FROM tutorials";
$result = mysqli_query($db, $qry);

foreach($result as $item) {
    //echo $item["id"];
    $id = $item["id"];
    $static_view = mt_rand(1000,1000000);
    $unique_view = mt_rand(100,10000);

    $qry = "INSERT INTO tutorial_views VALUES ($id,$static_view,$unique_view)";
    mysqli_query($db,$qry);
    //echo $id . "<br>" . $static_view . "<br>" . $unique_view . "<hr>";
}