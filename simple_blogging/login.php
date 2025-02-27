<?php include_once "views/top.php"; 


if(isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $ret = loginUser($email, $password);
    $message = "";
    switch($ret) {
        case "Login Success":
             $message="Login Success";
             if(getSession("username") === "waiferkolar" && getSession("email") === "waiferkolar@gmail.com"){
                header("Location:admin.php");
             }
             else {
                header("Location:index.php");
             }
             break;
        case "Login Fail!":
             $message = "Login Fail";
             break;
        case "Auth Fail!":
             $message = "User Name and Password Not in Format!";
             break;
        default:;
        echo "<div class=,alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  ". $message ."
</div>";
    }

    echo $email. " " . $password;
}
?>

<div class="container my-3">
    <div class="col-md-8 offset-md-2 table-bordered p-5">
        <h1 class="text-danger english text-center mb-3">Login To See Special Posts!</h1>
        <form action="" class="form">
        <div class="form-group">
                <label for="username" class="english">Username</label>
                <input type="text" class="form-control english rounded-0" name="username" id="username">
            </div>
            <div class="form-group">
                <label for="email" class="english">Email</label>
                <input type="email" class="form-control english rounded-0" name="email" id="email">
            </div>
            <div class="form-group">
                <label for="password" class="english">Password</label>
                <input type="password" class="form-control english rounded-0" name="password" id="password">
            </div>
            <p></p>
            <button class="btn btn-secondary" type="submit" name="submit" value="submit">Login</button>
        </form>
    </div>
</div>

<?php include_once "views/footer.php" ?>
<?php include_once "views/base.php" ?>