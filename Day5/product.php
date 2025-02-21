<?php

  session_start();
  if(!isset($_SESSION['name'])) {
    header("Location:index.php");
  }

  include "links.php";
?>
<h1>Product Page</h1>