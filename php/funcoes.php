<?php

function conexao(){
define('host', 'localhost');
define('user', 'root');
define('password', '');
define('db_name', 'desafio-twitter');

  try {
    $PDO = new PDO('mysql:host='. host . ';dbname=' . db_name, user, password);
    $PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
}

    ?>