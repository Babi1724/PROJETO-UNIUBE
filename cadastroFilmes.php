<html>
    <body>
        <div style="width:800px;margin: 0 auto;"
        <div id="menu" style="width:200px;background-color:#f4f4f4;min-height:400px;float:left;"</div>
            <p><a href="cadastroFilmes.php"><font color="black">Cadastrar Filmes</font></a></p>
            <p>Item 3</p>
        </div>

        <?php
        include("conexao.php");
        ?>

        <div style="background-color:#ddd;min-height:400px;width:600px;float:left">
            <h2>Manutenção de filmes</h2>
            <h3>Criar novo filme</h3>
            <form method="post" action="inserirFilme.php">
                NOME:<input type="text" name="nome" id="nome"><br>
                ANO:<input type="text" name="ano" id="ano"><br>
                GENERO:<select name="genero">
                            <option value="">Selecione um gênero</option>
                        <?php
                        $sql = "select * from generos where status=1";
                        if(!$resultado = $conn->query($sql)){
                            die("erro");
                        }
                        while($row = $resultado ->fetch_assoc()){
                            ?>
                            <option value="<?=$row['genero'];?>"><?=$row['describe'];?></option>
                            <?php
                        }

            ?>
                        </select>
                <input type="submit" value="inserir">
