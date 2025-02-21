<?php
   function mySetCookie() {
     setcookie('CM', 'Eighter Myanmar', time() + 3600, '/', '', 0);
   }
   function myGetCookie() {
    if(isset($_COOKIE['CM'])) {
        echo $_COOKIE['CM'];
    }else {
        echo "There is no cookie set with that key";
    }
   }

   function myDeleteCookie() {
      setcookie('CM', '', time() - 3600, '/', '', 0);
   }
   
   //myDeleteCookie();
   //mySetCookie();
    myGetCookie();
?>
