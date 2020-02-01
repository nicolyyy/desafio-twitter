<?php
define('host', 'localhost');
define('user', 'root');
define('password', '');
define('db_name', 'desafio-twitter');

 /* try {
    $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    */
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
    $select = "SELECT nome FROM usuarios WHERE nome ='$nome'";
    
    foreach ($PDO->query($select) as $row) {
       $row['nome'];
    }
    
    if($nome == $row['nome']){
        echo "Conta existente";
     
    }

   else{
    $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome','$email','$senha')";
    $stmt = $PDO->prepare( $sql );
    $stmt->bindParam( ':nome', $nome );
    $stmt->bindParam( ':email', $email );
    $stmt->bindParam( ':senha', $senha );
     $result = $stmt->execute(); 
    echo "Cadastro realizado com sucesso";
    
    }


?>