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
        <div style="min-height:100px; width:100%;background-color:rgb(198, 198, 252);";>
            <div style="width:50%;float:left">
            <span style="padding-left:300px;font-size:20px"> Olá <?=$_SESSION['nome'];?></span>
            </div>

            <div style = "width: 50%; float:left; text-align:right;">
            <span style="background-color:blue;margin-right:10px;"><ahref="sair.php"><font color="black">
            </div>
        </div>
        <div id="menu" style="width:200px;background-color:#f4f4f4;min-height:400px;float:left;text-align:center">
            <h2>Menu</h2>
            <p><a href="item.php"><font color="black">Item 1 </font></a></p>
            <p>Item 2 </p>
            <p>Item 3 </p>
    </div>

    <div style= "background-color: #ddd;min-height:400px;width:600px;float:left;text-align:center">
        <h2>Manutenção de filmes</h2>
</body>
</html>