<h1>Index Page</h1>
<form action="" method="post">
    <input type="text" name="name" placeholder="username"><br><br>
    <input type="password" name="password"><br><br>
    <button type="submit" name="submit">Login</button>
</form>

<?php
   
   session_start();

   include "links.php";

   if(isset($_POST['submit'])) {
    $user = $_POST['name'];
    $pass = $_POST['password'];

    if($user == "Lynn Htet" && $pass == "123") {
        $_SESSION['name'] = $user;
        $_SESSION['password' ] = $pass;
        header("Location: member.php");
    }
    else {
        echo "You are not a valid user.";
    }
   }
?>