<?php include_once "views/top.php"; ?>
<?php include_once "views/nav.php"; 
require_once "sysgem/membership.php";


if(isset($_POST['submit'])) {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $ret = registerUser($username, $email, $password);
    $message = "";

    switch($ret) {
        case "Registration successful!":
             $message = "Register success";
             setSession("username", $username);
             setSession("email", $email);
             if($username === "Waiferkolar" && $email === "waiferkolar@gmail.com") {
                header("Location:admin.php");
             }else {
                header("Location:index.php");
             }
             header("Location:index.php");
             break;
        case "Email is already in Use!":
             $message = "Email is already in Use!";
             break;
        case "Register Fail":
             $message = "Register Fail";
             break;
        case "Fail":
             $message = "Authentication Fail";
             break;
        default:
         break;
    }
    echo "<div class=,alert alert-warning alert-dismissible fade show' role='alert'>
  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  ". $message ."
</div>";
}

?>


<div class="container my-3">
    <div class="col-md-8 offset-md-2 table-bordered p-5">
        <h1 class="text-danger english text-center mb-3">Register To Be A Number</h1>
        <form action="register.php" class="form" method="post">
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