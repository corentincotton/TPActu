<?php

  require_once 'php/config.php';

  if(isset($_POST["submit2"])){
    if($_POST["lastname"] != "" && $_POST["firstname"] != "" && $_POST["pseudo"] != ""  && $_POST["password"] != ""){
      $req = $PDO->prepare("INSERT INTO users (lastname, firstname, pseudo, password) VALUES(:lastname, :firstname, :pseudo, :password)");
      $req->bindValue(':lastname', $_POST["lastname"]);
      $req->bindValue(':firstname', $_POST["firstname"]);
      $req->bindValue(':pseudo', $_POST["pseudo"]);
      $req->bindValue(':password', $_POST["password"]);
      if ($req->execute()){
        echo "votre formulaire a été rempli, tu peux entrer avec le pseudo";
      }
    }
  }

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/accueil.css">
    <script src="js/index.js"></script>
  </head>
  <body>
    <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h1>Newsletter</h1>
          <form class="form" action="accueil.php" method="POST">
            <input type="text" name="pseudo" placeholder="Pseudo">
            <input type="password" name="password" placeholder="Mot de passe">
            <input type="submit" name="submit1" value="se connecter">
          </form>
        </div>
        </div>
        <div class="col-md-12">
          <form class="inscri" action="accueil.php" method="POST"></div>
            <div class="inscri"><input type="text" name="lastname" placeholder="nom"></div>
            <div class="inscri"><input type="text" name="firstname" placeholder="prenom"></div>
            <div class="inscri"><input type="text" name="pseudo" placeholder="pseudo"></div>
            <div class="inscri"><input type="password" name="password" placeholder="password"></div>
            <div class="inscri"><input type="submit" name="submit2" value="s'inscrire"></div>
          </form>
        </div>
      </div>
    </div>
  </header>
  </body>
</html>
