<form action="" method="post">
    <input type="text" name="username">
    <button type="submit" name="submit">Upload</button>
</form>

<?php

echo $_SERVER["PHP_SELF"];

if(isset($_REQUEST['submit'])) {
    echo "Submit button click";
}

?>