<?php

$dbHost = 'localhost'; 
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'form';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//teste para assegurar conexao com o banco

//if ($conexao->connect_errno) {
  //  echo "Erro ao conectar ao banco de dados: " . $conexao->connect_error; 
//} else {
 //   echo "Conexão bem-sucedida!";
//}

//echo "feito";
?>
