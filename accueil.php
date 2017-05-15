<?php
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWD', 'adepal59');
define('MYSQL_DB', 'php');

try {
  $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB, MYSQL_USER, MYSQL_PASSWD);
  $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  $PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
} catch (PDOException $e) {
  $e->getMessage();
}

if(isset($_POST["submit2"])){
  if($_POST["lastname"] != "" && $_POST["firstname"] != "" && $_POST["pseudo"] != ""  && $_POST["password"] != ""){
    $req = $PDO->prepare("INSERT INTO users (lastname, firstname, pseudo, password) VALUES(:lastname, :firstname, :pseudo, :password)");
    $req->bindValue(':lastname', $_POST["lastname"]);
    $req->bindValue(':firstname', $_POST["firstname"]);
    $req->bindValue(':pseudo', $_POST["pseudo"]);
    $req->bindValue(':password', $_POST["password"]);
      if ($req->execute()){
      }
    }
  }


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>document</title>
    <link rel="stylesheet" href="accueil.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="index.js"></script>
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
