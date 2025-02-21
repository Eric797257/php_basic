<?php
   $_SERVER['HTTP_USER_AGENT'];
   $_SERVER['QUERY_STRING'];

   echo $_SERVER["PHP_SELF"] . "<br>";

   #Important

   $_SERVER['PHP_SELF'];//Getting Current PHP File Name
   $_SERVER['SERVER_ADDR']; //Getting current Host Address
   $_SERVER['SERVER_NAME']; //Getting Current Domain Name
   $_SERVER['REQUEST_METHOD']; //Getting Request Method
   $_server['SERVER_PROTOCOL']; // Getting Server Protocol and Version
   $_SERVER['REQUEST_TIME']; //Getting Request Time
   $_SERVER['QUERY_STRING']; // Getting Query String
   $_SERVER['DOCUMENT_ROOT']; //Getting Document Root
   $_SERVER['HTTP_HOST']; //Getting HTTP Host
   $_SERVER['HTTP_USER_AGENT']; //Getting User Agent
   $_SERVER['SCRIPT_FILENAME']; //Absolute Path Of Current File
   $_SERVER['SERVER_PORT']; //Getting Port Number
   $_SERVER['SCRIPT_NAME']; //Script File Name
   $_SERVER['REQUEST_URI']; // Request Uri
   $_SERVER['REMOTE_ADDR']; //Remote Address

   #Not Frequently use
   $_SERVER['GATEWAY_INTERFACE']; //Getting Gateway Interface
   $_SERVER['SERVER_SOFTWARE']; // Getting Server Software
   $_SERVER['HTTP_ACCEPT']; // Server Http Accept file type
   $_SERVER['HTTP_ACCEPT_ENCODING']; // Server Http Accept gzip dfile
   $_SERVER['HTTP_ACCEPT_LANGUAGE']; // Server Accept Language en-Unicode
   $_SERVER['HTTP_CONNECTION']; //Connection
   $_SERVER['REMOTE_PORT']; //Remote Port
   $_SERVER['SERVER_ADMIN']; //Server Admin
   $_SERVER['SERVER_SIGNATURE']; //Server Signature


   #Only For Command Link
   $_SERVER['argv'];
   $_SERVER['argvc'];

   #Deprecate & Offline Not Work
   $_SERVER['PATH_TRANSLATED'];
   $_SERVER['HTTP_ACCEPT_CHARSET'];
   $_SERVER['HTTP_REFERER'];
   $_SERVER['HTTPS'];
   $_SERVER['REMOTE_HOST'];
   $_SERVER['PHP_AUTH_DIGEST'];
   $_SERVER['PHP_AUTH_USER'];
   $_SERVER['PHP_AUTH_PW'];
   $_SERVER['AUTH_TYPE'];
?>