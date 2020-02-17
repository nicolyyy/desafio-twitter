<?php
require_once ("funcoes.php");
$con =  conexao();

function entrar($con){
 
  $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
  $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
  
  
  $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
  $sql = "SELECT ID, nome FROM usuarios WHERE nome = '$nome'  AND senha = '$senha'";
  $stmt = $PDO->prepare($sql);
 
  $stmt->bindParam(':nome', $nome);
  $stmt->bindParam(':senha', $senha);

  $stmt->execute();
 

  $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 


  if(count($users) <= 0){
    echo "<script>alert('Credenciais Inválidas. Tente Novamente.');
      window.location.replace('../singin.html');
      </script>";
      exit;
  }
      session_start();
      $pegarArray = $users[0];
      $pegarId = $pegarArray['ID'];
      $_SESSION['ID'] = $pegarId;
      echo "<script>
      window.location.replace('telainicial.php?/ID={$pegarId}');
      </script>"; 
      
 return ($con);
}



  entrar($con);

?>