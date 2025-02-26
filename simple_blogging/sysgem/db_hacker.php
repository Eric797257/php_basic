<?php

define("DB_HOST", "localhost");
define("DB_NAME", "simple_blog");
define("DB_USER", "root");
define("DB_PASS", "");

function dbConnect()
{
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno()) {
        echo "Database Connection Fail!";
    } else {
        return $db;
    }
}

function userLogin($email, $password)
{
    $password = encodePass($password);
    $db = dbConnect();
    $qry = "SELECT * FROM member WHERE email='$email' && password='$password'";
    $result = mysqli_query($db, $qry);

    if (mysqli_num_rows($result) > 0) {
        return "Login Success";
    } else {
        return "Login Fail";
    }
}

function insertUser($name, $email, $password)
{

    $password = encodePass($password);
    $curTime = getTimeNow();
    $db = dbConnect();

    $qry = "SELECT username /*count(email)*/ FROM member WHERE email='$email'";

    $result = mysqli_query($db, $qry);

    if ($result) {
        $username = "";

        foreach ($result as $str) {
            $usrename = $str["name"];
        }
        setSession('username', $username);
        setSession("email", $email);
        return "Login Success";
    } else {
        return "Login Fail";
    }

    /*if (!$result) {
        die("Query failed: " . mysqli_error($db));
    } else {

        $qry = "INSERT INTO member (name, email, password, created_at, updated_at) 
        VALUES ('$name', '$email', '$password', '$curTime', '$curTime')";
        
        $result = mysqli_query($db, $qry);

        if ($result) {
            echo "Registration successful!";
        } else {
            echo "Register Fail";
        }
    }*/
}

//insertUser("wai", "wai@gmail.com", "123123");

function encodePass($pass)
{
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass, $pass);

    return $pass;
}

function getTimeNow()
{
    return date("Y-m-d H:i:s", time());
}