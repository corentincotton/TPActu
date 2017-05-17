<?php

  require_once 'php/config.php';

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="js/jquery.min.js"></script>
    <script src="js/news.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/accueil.css">
    <title>Newsletter</title>
  </head>
  <body>
    <header>
      <h1 class="new">Inscription Newsletter</h1>
      <form id="news" action="" method="POST">
        <input type="email" name="mail" placeholder="email">
        <input type="submit" name="news" value="inscription">
        <div class="newsMsg"></div>
      </form>
    </header>
  </body>
</html>
