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

/*$qry = "CREATE TABLE IF NOT EXISTS users(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) NOT NULL,
    email VARCHAR(225) NOT NULL,
    password VARCHAR(225) NOT NULL,
    UNIQUE KEY email (email)
);";*/

$qry = "CREATE TABLE IF NOT EXISTS subjects(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) NOT NULL
);";

/*$qry = "CREATE TABLE IF NOT EXISTS tutorials(
         id INT(10) NOT NULL AUTO_INCREMENT,
         subject_id INT(3) NOT NULL,
         title VARCHAR(225) NOT NULL,
         created_by INT(3) NOT NULL,
         PRIMARY KEY(id)
);";*/

/*$qry = "CREATE TABLE IF NOT EXISTS tutorial_views(
     id INT(10) NOT NULL PRIMARY KEY,
     static_view INT(10) NOT NULL,
     unique_view INT(10) NOT NULL
);";*/

$result = mysqli_query(dbConnect(), $qry);
echo $result ? "Table Created Success." : "Table is not Created.";