<?php

  require_once 'config.php';

  if($_POST["mail"] != ""){
    $req = $PDO->prepare("INSERT INTO newsletter (mail) VALUES(:mail)");
    $req->bindValue(':mail', $_POST["mail"]);
    if ($req->execute()){
      echo true;
    }else {
      echo false;
    }
  }else{
    // form vide
  }

?>
