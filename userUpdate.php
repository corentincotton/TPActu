<?php

require_once 'php/config.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mis à jour du profil</title>
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
          <a class="navbar-brand">NAVBAR</a>
          <a class="navbar-brand">inscription</a>
        </nav>
      </div>
    <form id="userUpdate" action="" method="post">
      <label class="updateForm" for="lastname">lastname</label><br>
      <input class="updateForm" type="text" name="lastname" placeholder="lastname"><br><br>
      <label class="updateForm" for="firstnamepseudo">firstname</label><br>
      <input class="updateForm" type="text" name="firstname" placeholder="firstname"><br><br>
      <label class="updateForm" for="pseudo">pseudo</label><br>
      <input class="updateForm" type="text" name="pseudo" placeholder="pseudo"><br><br>
      <label class="updateForm" for="password">password</label><br>
      <input class="updateForm" type="password" name="password" placeholder="password"><br><br>
      <input class="updateForm" type="submit" value="Mettre à jour le profil">
    </form>
  </body>
</html>
