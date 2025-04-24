<html>
<div style= "width:800px;margin:0 auto;">
        <div style="min-height:100px; width:100%;background-color:rgb(148, 148, 150);";>
            <div style="width:50%;float:left">
            </div>

            <div style = "width: 50%; float:left; text-align:right;">
            <span style="background-color:blue;margin-right:10px;"><a href="sair.php"><font color="black"><font/>
            </div>
        </div>

        <div id="menu" style="width:200px; background-color:#f4f4f4; min-height:400px;float:left;">
            <h2>Menu</h2>
            <p><a href="cadastrarUsuario.php"><font color="black">Cadastrar Usuario</font></a></p>
            <p>Item 2 </p>
            <p>Item 3 </p>
    </div>

    <div style= "background-color: #ddd;min-height:400px;width:600px;float:left;">
        <h2>Cadastrar Usuario</h2>
        <form method="post" action="salvarUsuario.php">
            CPF: <input type="text" name="cpf"><br>
            <br>
            SENHA: <input type="password" name="senha"><br>
            <br>
            <div>
            NOME: <input type="text" name="nome"><br>
            <input type="submit" value="ENVIAR">
            </div>
        </form>
</html>