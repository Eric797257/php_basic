<form action="<?php $_PHP_SELF ?>" method = "post">
    <h3>Register To Be a Member!.</h3>
    <input type="text" name="username" placeholder="User Name"><br><br>
    <input type="password" name="password" placeholder="Password"><br><br>
    <button type="submit" name="submit">Register</button>
</form>

<?php

if(isset($_POST['submit'])){
    $uname =  $_POST['username'];
    $upass = $_POST['password'];
    echo "Your name is <span style='color: red'>" . $uname . "</span>" . " and your password is <span style='color: red'>" . $upass . "</span>";
}

?>