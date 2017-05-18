<?php

  require_once 'config.php';

  if($_POST["pseudo"] != "" && $_POST["password"] != ""){
    $req = $PDO->prepare('SELECT id FROM users WHERE pseudo=:pseudo AND password=:password');
    $req->bindValue(":pseudo", $_POST["pseudo"]);
    $req->bindValue(":password", sha1($_POST["password"]));
    if($req->execute()){
      $res = $req->fetch();
      if(isset($res->id)){
        $session = sha1(uniqid());
        $req = $PDO->prepare('UPDATE users SET session=:session WHERE id=:id');
        $req->bindValue(":id", $res->id);
        $req->bindValue(":session", $session);
        if($req->execute()){
          $_SESSION["session"] = $session;
          echo 1;
        }else{
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
