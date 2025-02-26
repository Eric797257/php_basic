<?php

require_once "sysgem/db_hacker.php";

function registerUser($username, $email, $password) {
    if(usernameCheck($username) && emailCheck($email) && passwordCheck($password)) {
        return insertUser($username,$email,$password);
    }else {
        return "Fail";
    }

}

function loginUser($email, $password){
    if(emailCheck($email) && passwordCheck($password)) {
        return userLogin($email,$password);
    }else {
        return "Auth Fail";
    }
}

function usernameCheck($username) {
    #Username char > 6
    #Username a-zA-Z 0to9 _
    if(strlen($username) >= 6){
        $bol = preg_match('/^[\w]+$/', $username);
        return $bol;
    }else {
        return false;
    }
}

function emailCheck($email) {
    #Email char > 15 @gmail.com
    #aA@a.com

    if(strlen($email) >= 15) {
        $bol = preg_match('/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/', $email);
        return $bol;
    }else {
        return false;
    }
}

function passwordCheck($password) {
    #Password char > 6
    #Contain small letter
    #Capital Letter
    #Special Character
    #Digit Number

    if(strlen($password) >= 6) {
        $bol = preg_match('/^(?=.*[a-z]) (?=.*[A-Z]) (?=.*\d) (?=.*(_|[^\w])).+$/', $password);
        return $bol;
    }else {
        return false;
    }
}

$bol = passwordCheck("aA12@1@");
echo $bol ? "TRUE" : "FALSE";