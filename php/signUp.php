<?php

  require_once 'config.php';

  if($_POST["lastname"] != "" && $_POST["firstname"] != "" && $_POST["pseudo"] != ""  && $_POST["password"] != ""){
    $req = $PDO->prepare("INSERT INTO users (lastname, firstname, pseudo, password) VALUES(:lastname, :firstname, :pseudo, :password)");
    $req->bindValue(':lastname', $_POST["lastname"]);
    $req->bindValue(':firstname', $_POST["firstname"]);
    $req->bindValue(':pseudo', $_POST["pseudo"]);
    $req->bindValue(':password', sha1($_POST["password"]));
    if ($req->execute()){
      echo true;
    }else{
      echo false;
    }
  }

?>
