<?php

$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'banco_birdie';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//teste de conexção com o banco
//if ($conexao->connect_error) {
  //  die("Falha na conexão: " . $conexao->connect_error);
//}
//else {
  //  echo "Conexão bem-sucedida!";
//}

?>