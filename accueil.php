<?php

  require_once 'php/config.php';

  error_reporting(E_ALL);
  ini_set('display_errors', 1);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/accueil.css">
    <script src="js/log.js"></script>
  </head>
  <body>
    <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Newsletter</h1>
          <form id="signInForm" class="form" action="accueil.php" method="POST">
            <input type="text" name="pseudoIn" placeholder="Pseudo">
            <input type="password" name="passwordIn" placeholder="Mot de passe">
            <input type="submit" name="signInForm" value="se connecter">
            <div class="signInMsg"></div>
          </form>
        </div>
        </div>
        <div class="col-md-12">
          <form id="signUpForm" action="" method="POST"></div>
            <div><input type="text" name="lastname" placeholder="nom"></div>
            <div><input type="text" name="firstname" placeholder="prenom"></div>
            <div><input type="text" name="pseudoUp" placeholder="pseudo"></div>
            <div><input type="password" name="passwordUp" placeholder="password"></div>
            <div><input type="submit" name="signUpForm" value="s'inscrire"></div>
            <div class="signUpMsg"></div>
          </form>
        </div>
      </div>
    </div>
  </header>
  </body>
</html>
