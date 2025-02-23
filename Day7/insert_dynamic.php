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
/*$subjects = json_decode(file_get_contents("subjects.json"));

foreach($subjects as $subject) {
    $qry = "INSERT INTO subjects (name) VALUES ('$subject->name')";
    mysqli_query(dbConnect(), $qry);
}*/

$tutorials = json_decode(file_get_contents("tutorials.json"));

$db = dbConnect();
$qry = "SELECT * FROM subjects";
$result = mysqli_query($db, $qry);

$tutorials = json_decode(file_get_contents("tutorials.json"));

foreach($tutorials as $tutorial) {
    //echo $item["name"] . "<br>";
    $qry = "SELECT name FROM subjects WHERE id=$tutorial->subject_id";
    $result = mysqli_query($db, $qry);
    $name = "";
    foreach($result as $row) {
        $name = $row["name"];
    }
    //echo $name;
    /*138*/
    $subjectid = $tutorial->subject_id;
    $creator = $tutorial->creator_id;

    $t=0;
    for($i = $tutorial->start_id; $i <= $tutorial->end_id; $i++){
        $title = $name . " " . ++$t;
        $qry = "INSERT INTO tutorials(subject_id,title,created_by) VALUES (
         $subjectid,'$title',$creator)";
        mysqli_query($db, $qry);
    }
}