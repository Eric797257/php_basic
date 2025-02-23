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


/*$users = json_decode(file_get_contents("user.json"));
foreach($users as $user) {
    $pass = passGen($user->password);
    $qry = "INSERT INTO users VALUES($user->id, '$user->name', $user->creator, '$user->email', '$pass')";
    mysqli_query(dbConnect(), $qry);
    //echo $user->name . "<br>"; // stdClass Object Type
}*/ //error code

$subjects = json_decode(file_get_contents("subjects.json"));
foreach($subjects as $subject) {
    $qry = "INSERT INTO subjects (name) VALUES ('$subject->name')";
    mysqli_query(dbConnect(), $qry);
}
