<?php

  require_once 'php/config.php';

  //envoie du mail
  $message = "Line 1\r\nLine 2\r\nLine 3";
  $message = wordwrap($message, 70, "\r\n");
  mail('corentin.cotton@free.fr', 'Mon Sujet', $message);

  if(isset($_POST["contactform"])){
    if($_POST["email"] != "" && $_POST["message"] !=""){
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>page d'accueil</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/accueil.css">
    <script src="js/news.js"></script>
    <script src="js/log.js"></script>
  </head>
  <body>
    <header>
      <div class="title">
        <nav class="navbar navbar-light bg-faded">
          <a class="navbar-brand" >NAVBAR</a>
          <a class="navbar-brand" href="http://localhost/TP/newsletter.php">inscription</a>
        </nav>
        <form id="signInForm" action="accueil.php" method="POST">
          <input type="text" name="pseudoIn" placeholder="Pseudo">
          <input type="password" name="passwordIn" placeholder="Mot de passe">
          <input type="submit" name="signInForm" value="se connecter">
          <div class="signInMsg"></div>
        </form>
      </div>
      <form id="signUpForm" action="" method="POST"></div>
      <div class="inscri"><input type="text" name="lastname" placeholder="nom"></div>
      <div class="inscri"><input type="text" name="firstname" placeholder="prenom"></div>
      <div class="inscri"><input type="text" name="pseudoUp" placeholder="pseudo"></div>
      <div class="inscri"><input type="password" name="passwordUp" placeholder="password"></div>
      <div class="inscri"><input type="submit" name="signUpForm" value="s'inscrire"></div>
      <div class="signUpMsg"></div>
    </form>
    </header>

    <section>
      <h2>Contact</h2>
      <form id="contactform" action="" method="POST">
        <div><input type="text" name="email" placeholder="email"></div>
        <div class="message"><textarea type="text" name="message" id="message" placeholder="message" cols="50 "></textarea></div>
        <div><input type="submit" name="" value="envoyer le message"></div>
      </form>

      <h2>Inscription Newsletter</h2>
      <form id="news" class="news" action="" method="POST">
        <div><input type="text" name="mail" placeholder="email"></div>
        <div><input type="submit" name="news" value="inscription"></div>
        <div><div class="newsMsg"></div>
      </form>
    </section>

    <footer>
      <nav class="navbar navbar-default navbar-fixed-bottom">
        <a class="navbar-brand" >EDITED BY</a>
        <a class="navbar-brand">Romain</a>
        <a class="navbar-brand">David</a>
        <a class="navbar-brand">Corentin</a>
      </nav>
    </footer>
  </body>
</html>
