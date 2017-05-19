<?php

require_once 'php/config.php';


?>





<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>inscription</title>
      <link rel="stylesheet" href="css/bootstrap.css">
      <link rel="stylesheet" href="css/accueil.css">
      <script src="js/news.js"></script>
      <script src="js/log.js"></script>
  </head>
  <body>
    <header>
      <div class="title">
      <nav class="navbar navbar-light bg-faded">
        <a class="navbar-brand" >Inscritpion</a>
      </nav>
      <form id="signUpForm" action="" method="POST"></div>
        <div class="inscri"><input type="text" name="lastname" placeholder="nom"></div>
        <div class="inscri"><input type="text" name="firstname" placeholder="prenom"></div>
        <div class="inscri"><input type="text" name="pseudoUp" placeholder="pseudo"></div>
        <div class="inscri"><input type="password" name="passwordUp" placeholder="password"></div>
        <div class="inscri"><input type="submit" name="signUpForm" value="s'inscrire"></div>
        <div class="signUpMsg"></div>
  </form>
  </div>
</header>
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
