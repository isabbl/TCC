<?php
//
    if (isset($_POST['submit'])) 


    //teste para saber se o metodo post esta funcionando e enviando dados
    //{
    //    print_r($_POST['email']);
   // }


   include_once('config.php');

   $email = $_POST['email'];
   $senha = $_POST['senha'];

   $result = mysqli_query($conexao, "INSERT INTO users(email, senha) 
   VALUES ('$email','$senha')" );
?>





<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Cadastro</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
</head>
<body>
    <div class="box">
        <form action="cadastro.php" method="POST">
            <div class = "inputbox">
                <input type="email" name="email" id="email"  class="inputUser" required>
                <label for="email">EMAIL</label>
            </div>

            <div class="inputbox">
                <input type="password" name="senha" id="senha"  class="input" required>
                <label for="senha">SENHA</label>
            </div>
        <input type="submit" name="submit" id="submit">
        </form>
   
</body>
</html>