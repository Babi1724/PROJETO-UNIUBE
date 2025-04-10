<html>
    <title>Primeira Aula</title>
    <head>
    </head>

    <style>
        body {
                margin: 60;
                padding: 0;
                display: flex;
                justify-content: center;  /* Centraliza horizontalmente */
                align-items: center;  /* Centraliza verticalmente */
                height: 60vh;  /* 100% da altura da janela */
            }
        form{
            background-color:#808080;
            text-align:left;
            border-radius:20px;
            margin:300px;
            padding:30px;
            width: 210px;

        }
        input{
            font-size:15px;
            border-radius:5px;
            display:block;
            margin: 0 auto;
        }
    </style>

    <body>
        <form method="post" action="login.php">
            CPF: <input type="text" name="cpf"><br>
            <br>
            SENHA: <input type="password" name="senha"><br>
            <br>
            <div>
            <input type="submit" value="ENVIAR">
            </div>
        </form>
    </body>
</html>