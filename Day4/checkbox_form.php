<form action = "" method = "post">
    <input type="checkbox" name="color[]" value="red" checked> Red <br><br>
    <input type="checkbox" name="color[]" value="red"> Red <br><br>
    <input type="checkbox" name="color[]" value="blue"> Blue<br><br>
    <input type="checkbox" name="color[]" value="green"> Green <br><br>
    <input type="checkbox" name="color[]" value="Navy Blue"> Navy Blue <br><br>
    <input type="checkbox" name="color[]" value="Rain Bow"> Rain Bow <br><br>
    <input type="submit" name="submit" value="choose">
</form>
<?php

if(isset($_POST['submit'])) {
    if(isset($_POST['color'])) {
        $colors = $_POST['color'];
            foreach($colors as $color) {
                echo $color . "<br>";
            }
        }
}

?>