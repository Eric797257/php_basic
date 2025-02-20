<form action="" method="post">
    <h3>Choose Your Best Color.</h3>
    <input type="radio" name="myRadio" value="Red"> Red <br><br>
    <input type="radio" name="myRadio" value="Green"> Green <br><br>
    <input type="radio" name="myRadio" value="Blue"> Blue <br><br>
    <input type="radio" name="myRadio" value="Rainbow"> Rainbow <br><br>
    <input type="radio" name="myRadio" value="Navy Blue"> Navy Blue <br><br>
    <input type="submit" name="submit" value="choose">
</form>
<?php

if(isset($_POST['submit'])) {
    $color = $_POST['myRadio'];
    echo "Yout choose => " . $color;
}

?>