<?php
   define("DB_HOST", "localhost");
   define("DB_NAME", "tests");
   define("DB_USER", "root");
   define("DB_PASS", "");

   function dbConnect() {
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    if(mysqli_connect_errno() > 0)
       die("Connection Failed!");
    else
       return $db;

   }

   function executeQuery($qry) {
      $db = dbConnect();
      $result = mysqli_query($db, $qry);
      /*echo mysqli_num_rows($result);
      errorDebugger($result);*/
      if(mysqli_num_rows($result) > 0 ) {
         foreach($result as $item) {
            //errorDebugger(($item));
            echo "Id is => " . $item ["id"] . "<br>";
            echo "Name is => " . $item["name"] . "<br>";
            echo "Email is => " . $item["email"] . "<br>";
            echo "Password is => " . $item["password"] . "<br>";
            echo "<hr>";
      }
      /*foreach($result as $item) {
         //errorDebugger(($item));
         echo "Id is => " . $item ["id"] . "<br>";
         echo "Name is => " . $item["name"] . "<br>";
         echo "Email is => " . $item["email"] . "<br>";
         echo "Password is => " . $item["password"] . "<br>";
         echo "<hr>";
      }*/
      }
   }

   function retrieveSingleData($id) {
      $qry = "SELECT * FROM users WHERE id=$id";
      $db = dbConnect();
      $result = mysqli_query($db, $qry);
      if(mysqli_num_rows($result) > 0) {
         foreach($result as $data) {
            echo "Id is " . $data["id"] . "<br>";
            echo "Name is " . $data["name"] . "<br>";
            echo "Email is " . $data["email"] . "<br>";
            echo "Password is " . $data["password"] . "<br>";
            echo "Extra is " . $data["extra"];
            echo "<hr>";
         }
      }
   }

   function insertData($qry) {
      $db = dbConnect();
      $result = mysqli_query($db, $qry);
      echo $result > 0 ? "Data Insert Successfully" . mysqli_insert_id($db) : "Data Insert Fail";

   }

   function insertUniqeData($name, $email, $pass){
      $qry = "SELECT * FROM users WHERE name='$name'";
      $db = dbConnect();
      $ret = mysqli_query($db, $qry);
      if(mysqli_num_rows($ret) > 0) {
         echo "Uer name is already in user.";
      }
      else {
         $qry = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$pass')";
         $result = mysqli_query($db, $qry);
         echo $result > 0 ? "Data Insert Successfully." : "Data Insert Fail";
      }
   }
   function passGen($pass) {
      $pass =md5($pass);
      $pass = sha1($pass);
      $pass = crypt($pass, $pass);
      return $pass;
   }
   function errorDebugger($data) {
    echo "<pre>" .print_r($data,true) . "</pre>";
   }

   function multiInertData($qry){
      $db = dbConnect();
      $result = mysqli_multi_query($db, $qry);
      echo $result ? "Data Insert Successfully." : "Data Insert Fail";
   }

   function delteData($name){
      $qry = "DELETE FROM users WHERE name='$name'";
      $db = dbConnect();
      $result = mysqli_query($db, $qry);
      echo $result ? "Deleted" :"Delete Fail";
   }

   function updateData($qry) {
      $db = dbConnect();
      $result = mysqli_query($db, $qry);
      echo $result ? "Data Update Successfully." : "Data Update Not Successfully.";
   }

   function retrieveDataNewStyle($qry) {
      $db = dbConnect();
      $result = mysqli_query($db, $qry);

      if(mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)){
            //echo "Id is " . $row["id"] . "<br>";
            echo "Name is " . $row["name"] . "<br>";
            //echo "<hr>";
         }
      }
   }
   
   /*$qry = "SELECT DISTINCT(name) FROM users WHERE extra IS NULL";
   retrieveDataNewStyle($qry);
   $qry = "SELECT * FROM users ORDER BY id DESC";
   $qry = "SELECT * FROM users LIMIT 2, 2";
   $qry = "SELECT * FROM users WHERE id > 2";
   $qry = "SELECT * FROM users ORDER BY name DESC";
   executeQuery($qry);

   $extra = NULL;
   $pass = passGen(123);
   $qry = "INSERT INTO users VALUES (0, 'Tun Tun', 'tuntun@gmail.com', '$pass', '');";
   $qry .= "INSERT INTO users VALUES (0, 'Su Su', 'susu@gmail.com', '$pass', '');";
   $qry .= "INSERT INTO users VALUES (0, 'U Hla', 'uhla@gmail.com', '$pass', '');";
   $qry .= "INSERT INTO users VALUES (0, 'Daw Mya', 'dawmya@gmail.com', '$pass', '');";
   $qry = "INSERT INTO users VALUES (0, 'Mg Mg', 'mgmg@gmail.com', '$pass', '')";
   insertData($qry);
   insertUniqeData("Aung Aung", "aungaung@gmail.com", $pass);
   executeQuery($qry);
   retrieveSingleData(2);
   multiInertData($qry);
   delteData("Mg Mg");
   $qry = "UPDATE users SET name ='Ma Su' WHERE name='Su Su'";
   updateData($qry);

   $qry = "CREATE TABLE subject(
            id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT, 
            name VARCHAR(225) UNIQUE NOT NULL, 
            create_at date, 
            update_at date
            );";
   
   $result = mysqli_query(dbConnect(), $qry);
   echo $result ? "Table Created Successcully" : "Not Successfully.";*/