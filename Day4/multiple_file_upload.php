<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <button type="submit" name="submit">Upload</button>
</form>

<?php

if(isset($_POST['submit'])) {
    var_dump($_FILES);
    foreach ($_FILES['files']['tmp_name'] as $key => $value) {
        echo $_FILES['files']['name'][$key] . "<br>";
        echo $_FILES['files']['tmp_name'][$key] . "<br>";
        echo $_FILES['files']['size'][$key] . "<br>";
        echo $_FILES['files']['type'][$key] . "<br>";

        move_uploaded_file($_FILES['files']['tmp_name'][$key], 'uploads/'.$_FILES['files']['name'][$key]);
    }
}

?>