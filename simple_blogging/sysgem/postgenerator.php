<?php

require_once "sysgem/db_hacker.php";
function insertPost($title,$type,$writer,$content,$imglink){
    $created_at = getTimeNow();
    $db = dbConnect();
    $qry = "INSERT INTO post (title,type,writer,content,imglink,created_at)
           VALUES
           ('$title','$type','$writer','$content','$imglink','$created_at')
           ";

           $result = mysqli_query($db, $qry);
           return $result ? "TRUE" : "FALSE";
}

function getAllPost($type) {
    $db = dbConnect();
    $qry ="";
    if($type == 1) {
        $qry = "SELECT * FROM post WHERE type=$type";
    }else {
        $qry = "SELECT * FROM post";
    }
    $result = mysqli_query($db, $qry);
    return $result;
}

function getSinglePost($pid) {
    $db = dbConnect();
    $qry = "SELECT * FROM post WHERE id=$pid";
    $result = mysqli_query($db, $qry);
    return $result;
}

function updatePost($title, $type, $writer,$content, $imglink, $id){
    $db = dbConnect();
    $qry = "UPDATE post SET title='$title', type=$type, writer='$writer', 
    content='$content', imglinkt='$imglink' WHERE id=$id";
    $result = mysqli_query($db, $qry);
    if($result) {
        header("Location:showallpost.php");
    }else {
        echo "<script>alert('Post Insert Fail!')</script>";
    }
}

function getFilterPost($subject, $type) {
    $db = dbConnect();
    $qry = "SELECT * FROM post WHERE subject=$subject AND type=$type";
    $result = mysqli_query($db, $qry);
    return $result;
}