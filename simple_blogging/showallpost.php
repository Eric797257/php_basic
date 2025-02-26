<?php include_once "views/top.php";
include_once "views/nav.php";
include_once "views/header.php";
include_once "sysgem/postgenerator.php";
if (checkSession("username")) {
    if (getSession("username") != "waiferkolar") {
        header("Location:index.php");
    }
} else {
    header("Location:index.php");
}
if(isset($_POST['submit'])) {
    $posttile = $_POST["posttitle"];
    $posttile = $_POST["postype"];
    $postwriter = $_POST["postwriter"];
    $postcontent = $_POST["postcontent"];

    $imglink = mt_rand(time(), time()) . "_" . $_FILES["file"]["name"] . mt_rand(time(), time());
    move_uploaded_file($_FILES['file']['tmp_name'],'assets/uploads/' . $imglink);
    
    $bol = insertPost($posttile,$posttile,$postwriter,$postcontent,$imglink);
    
    if($bol){
        echo "<div class=,alert alert-warning alert-dismissible fade show' role='alert'>
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
   Post Successfully Inserted
</div>";
    }
    else {
        echo "<div class=,alert alert-warning alert-dismissible fade show' role='alert'>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
         Post Insert Fail
      </div>";
    }
}
?>

<div class="container my-3">
    <div class="row">
        <?php include_once "views/sidebar.php" ?>
        <section class="col-md-9">
                <?php
                  $result = getAllPost(2);
                  foreach($result as $post) {
                    echo '<div class="card mb-3">
                    <div class="card-block">
                        <h5>'.$post["title"].'</h5>
                        <p>'.substr($post["content"],0, 100) .'</p>
                        <a href="postedit.php?pid='.$post["id"].'" class="btn btn-info btn-sm float-right">Edit</a>
                    </div>
                    </div>';
                  }
                ?>
        </section>
    </div>
</div>

<?php include_once "views/footer.php" ?>
    <?php include_once "views/base.php" ?>