<?php

$ary = ["waifer@localhost","biber@localhost","tester@localhost"];
$to = implode(',', $ary);
$subject = "PHP Mail Test";
$message = '<html><body>';
$message .= '<div style="width:80%;margin: 0 auto;border:1px solid #ddd;padding:20px;overflow:auto;">';
$message .= '<h1 style="text-align: center;font-family:Cambria;color:red">PHP Mail Test By 72Coder</h1>';
$message .= '<p style="text-indent:35px;font-family:Cambria;font-size:16px;color:#999">Provide contextual feedback messages for typical user actions width
            the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
            the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
            the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
            the hadnful of available and flexible alert messages.
        </p>';
$message .= '<p style="text-indent:35px;font-family:Cambria;font-size:16px;color:#999">Provide contextual feedback messages for typical user actions width
        the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
        the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
        the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
        the hadnful of available and flexible alert messages.
       </p>';
$message .= '<p style="text-indent:35px;font-family:Cambria;font-size:16px;color:#999">Provide contextual feedback messages for typical user actions width
    the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
    the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
    the hadnful of available and flexible alert messages.Provide contextual feedback messages for typical user actions width
    the hadnful of available and flexible alert messages.
       </p>';
$message .= '<p style="text-indent:35px;font-family:Cambria;font-size:16px;color:#999; float:right;clear:both;">Your Sincerely!</p>';
$message .= '<p style="text-indent:35px;font-family:Cambria;font-size:16px;color:#999; float:right;clear:both;">Waiferkolar</p>';
$message .= '<img src="www.72coder.org/gallery/picky1.png">';

$message = '</body></html>';
$header = "From: MMPHPTuto@gmail.com\r\n";
$header .= "Content-Type:text/html";
$bol = mail($to, $subject, $message, $header);
echo $bol ? "Message Successfully Sent!" : "Message Sending Fail";