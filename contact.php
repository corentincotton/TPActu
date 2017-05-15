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
		echo "rempli tout les champs <a href=\"\"> du formulaire</a>.";
	    }
    else{
	    $from="From: $name<$email>\r\nReturn-path: $email";
        $subject="message envoyer";
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
    <link rel="stylesheet" href="accueil.css">
  </head>
  <body>
    <form action="" method="POST" enctype="multipart/form-data">
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
