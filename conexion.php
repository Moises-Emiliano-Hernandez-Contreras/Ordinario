<?php
$link ='mysql:host=localhost;dbname=gasolineria';
$user ='user';
$pass ='password';
try {
      $pdo=new PDO($link,$user,$pass);
      echo 'Conectado';
} catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }
?>