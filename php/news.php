<?php

  require_once 'config.php';

  if($_POST["mail"] != ""){
    $req = $PDO->prepare("INSERT INTO newsletter (mail) VALUES(:mail)");
    $req->bindValue(':mail', $_POST["mail"]);
    if ($req->execute()){
      echo 1;
    }else {
      echo 2;
    }
  }else{
    echo 3;
  }

?>
