<?php
require_once ("funcoes.php");
$con =  conexao();

 function cadastrar($con){
    
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $nome = isset($_POST['nome']) ? $_POST['nome'] : '';
    
    $senha = isset($_POST['senha']) ? $_POST['senha'] : '';
    $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
    $query = $PDO ->query("SELECT nome FROM usuarios WHERE nome ='$nome'");
    
    foreach ($query as $row) {
       $row['nome'];
    }
    
    if($nome == $row['nome']){
        echo "<script>
        alert('Conta Existente!');
        window.location.replace('../singup.html');
      </script>"; 
        die();
       
     }
    else{
    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome','$email','$senha')";
    $stmt = $PDO->prepare( $sql );
    $stmt->bindParam( ':nome', $nome );
    $stmt->bindParam( ':email', $email );
    $stmt->bindParam( ':senha', $senha );
    $result = $stmt->execute(); 
    echo "<script>
        alert('Conta Cadastrada Com Sucesso!');
        window.location.replace('../singin.html');
      </script>"; 
    }
    return $con;
} 
  cadastrar($con);
?>