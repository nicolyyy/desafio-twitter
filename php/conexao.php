<?php
define('host', 'localhost');
define('user', 'root');
define('password', '');
define('db_name', 'desafio-twitter');


try {
    $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
    // set the PDO error mode to exception
   /* $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);*/
    /*echo "Connected successfully";  */
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


   
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome','$email','$senha')";
    $stmt = $PDO->prepare( $sql );
    
    $stmt->bindParam( ':nome', $nome );
    $stmt->bindParam( ':email', $email );
    $stmt->bindParam( ':senha', $senha );
  
     
    $result = $stmt->execute();
     
    if ( ! $result )
    {
        var_dump( $stmt->errorInfo() );
        exit;
    }
     
    echo $stmt->rowCount() . "linhas inseridas";

?>