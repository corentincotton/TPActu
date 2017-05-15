<?php
$action=$_REQUEST['action'];
if ($action==""){

}else
    {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $message=$_REQUEST['message'];
    if (($name=="")||($email=="")||($message==""))
        {
		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
	    }
    else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="Message sent using your contact for";
		 mail("corentin.cotton@free.fr", $subject, $message, $from);
		echo "Email sent!";
	    }
    }


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>page de contact</title>
  </head>
  <body>
    <form  action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="action" value="submit">
  Your name:<br>
  <input name="name" type="text" value="" size="30"/><br>
  Your email:<br>
  <input name="email" type="text" value="" size="30"/><br>
  Your message:<br>
  <textarea name="message" rows="7" cols="30"></textarea><br>
  <input type="submit" value="Send email"/>
  </form>
  </body>
</html>
