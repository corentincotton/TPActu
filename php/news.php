<?php

require_once 'config.php';

if($_POST["mail"] != ""){
  $req = $PDO->prepare('SELECT COUNT(id) as count FROM newsletter WHERE mail=:mail');
  $req->bindValue(":mail", $_POST["mail"]);
  if($req->execute()){
    $res = $req->fetch();
    if($res->count == 0){
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
  }else{
    echo 2;
  }
}else{
  echo 4;
}

 ?>
