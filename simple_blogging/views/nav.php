<!--Navigation Start-->

<div class="container-fluid">
    <nav class="container navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand english" href="index.php">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link english" href="index.php">NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link english" href="filterpost.php?sid=1">Politic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link english" href="filterpost.php?sid=2">Wars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link english" href="filterpost.php?sid=3">IT NEWS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link english" href="filterpost.php?sid=4">Social</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle english" href="#" id="myDD" role="button" data-bs-toggle="dropdown">
                            <?php
                            if (checkSession("username")) {
                                echo getSession("username");
                            }else {
                                echo "Member";
                            }
                            ?>
                        </a>
                        <ul class="dropdown-menu">
                            <?php
                            if (checkSession("username")) {
                                echo "<a class='dropdown-item' href='logout.php'>Logout</a>";
                            } else {
                                echo "<a class='dropdown-item' href='register.php'>Register</a></li>";
                                echo "<a class='dropdown-item' href='login.php'>Login</a></li>";
                            }
                            ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<!--Navigation End-->