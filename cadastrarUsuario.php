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

        <?php
            include("conexao.php");

            $sql = "select nome, cpf,senha from usuarios";
            if(!$resultado = $conn->query($sql)){
                die("erro");
            }
            ?>
            <table>
                <tr>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>Senha</td>
                    <td>Alterar</td>
                    <td>Apagar</td>
                </tr>
            <?php
            while($row = $resultado->fetch_assoc()){
                ?>
                <tr>
                    <form method="post" action="alterarUsuario">
                        <input type="hidden" name="cpfAnterior" value="<?=$row['cpf'];?>">
                        <td>
                            <input type="text" name="nome" value="<?=$row['nome'];?>">
                        </td>
                        <td><input type="text" name="cpf" value="<?=$row['cpf'];?>"></td>
                        <td><input type="text" name="senha" value="<?=$row['senha'];?>"></td>
                        <td><input type="submit" value="alterar"></td>
                    </form>
                    <form method="post" action="apagarUsuario.php">
                        <input type="hidden" name="cpfAnterior" value="<?=$row['cpf'];?>">
                        <td><input type="submit" value="apagar"></td>
                    </form>
                </tr>
                <?php
            }
        ?>    </table>
</html>