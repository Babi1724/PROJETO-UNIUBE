<?php

include("autenticacao.php");

#echo "cpf:" .$_SESSION['cpf'].'<br>';
#echo "nome: " . $_SESSION['nome'] '<br>';
#echo "senha: " . $_SESSION['senha'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de filmes</title>
</head>
<body>
    <div style= "width:800px;margin:0 auto;">
        <div style="min-height:100px; width:100%;background-color:rgb(148, 148, 150);";>
            <div style="width:50%;float:left">
            <span style="padding-left:300px;font-size:20px"> Olá <?=$_SESSION['nome'];?></span>
            </div>

            <div style = "width: 50%; float:left; text-align:right;">
            <span style="background-color:blue;margin-right:10px;"><ahref="sair.php"><font color="black">
            </div>
        </div>
        <div id="menu" style="width:200px;background-color:#f4f4f4;min-height:400px;float:left;text-align:center">
            <h2>Menu</h2>
            <p><a href="cadastrarUsuario.php"><font color="black">Gerenciar Usuarios </font></a></p>
            <p><a href="cadastroFilmes.php"><font color="black">Cadastrar Filmes</font></a></p>
            <p>Item 3 </p>
    </div>

    <div style= "background-color: #ddd;min-height:400px;width:600px;float:left;text-align:center">
        <h2>Bem-Vindo á Locadora Fenix!</h2>
        <p>Esta é a pagina principal da locadora. Aqui você pode navegar para diferentes seções para uma experiencia prória.</p>
        <p>Utilize o menu lateral para cadastrar novos usuários, adicionar filmes à coleção ou realizar outras tarefas.</p>
        <p>Aproveite a experiência!</p>
    </div>
</body>
</html>