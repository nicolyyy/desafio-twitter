<?php

define('host', 'localhost');
define('user', 'root');
define('password', '');
define('db_name', 'desafio-twitter');

  $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
  $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
  
  $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
  $sql = "SELECT id, nome FROM usuarios WHERE nome = '$nome'  AND senha = '$senha'";
  $stmt = $PDO->prepare($sql);
   
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':senha', $senha);
  $stmt->execute();
   
  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
  if (count($users) <= 0)
  {
      echo "Email ou senha incorretos";
      exit;
  }
 else{

  echo "entra";
 /*
  $user = $users[0];
   
 
  $_SESSION['id'] = $user['id'];
  $_SESSION['nome'] = $user['nome'];
    header('Location: index.php'); */
 }
   



?>