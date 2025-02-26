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
            <form method="post" action="admin.php" enctype="multipart/form-data" class="mb-5 table-bordered p-5">
                <h3 class="text-center text-danger english">Pst Insert Form</h3>
                <div class="form-group">
                    <label for="posttitle" class="english">Post Title</label>
                    <input type="text" class="form-control english" id="posttitle" name="posttitle">
                </div>
                <div class="form-group">
                    <label for="posttype" class="english">Post Title</label>
                    <select class="form-control" id="posttype" name="posttype">
                        <option value="1">Free Post</option>
                        <option value="2">Paid Post</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="posttitle" class="english">Post Title</label>
                    <select class="form-control" id="exampleSelect1">
                        <option value="1">Free Post</option>
                        <option value="2">Paid Post</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="postwriter" class="english">Post Writer</label>
                    <input type="text" class="form-control english" id="postwriter" name="postwriter">
                </div>
                <div class="form-group">
                <label class="custom-file">
                    <input type="file" id="file" name="file" class="custom-file-input">
                    <span class="custom-file-control"></span>
                </label>
                </div>
                <div class="form-group">
                    <label for="postcontent" class="english">Content</label>
                    <textarea type="text" class="form-control" id="postcontent" 
                              rows="15"
                    name="postcontent"/>
                    </textarea>
                </div>
                <div class="row no-gutters justify-content-end">
                    <button class="btn btn-outline-primary mr-2">Cancel</button>
                    <button type="submit" name="submit" class="btn btn-primary">Post</button>
                </div>
            </form>
        </section>
    </div>
</div>

<?php include_once "views/footer.php" ?>
    <?php include_once "views/base.php" ?>