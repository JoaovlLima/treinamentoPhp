<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<Style>
    .form{
        background-color: gray;
        width: 30%;
        height: auto;
        margin: auto;
        padding: 5px;
        display: flex;
        flex-direction: column;
        align-items: start;
        border-style: solid;
        border-width: 10px;
        border-color: black;
        border-radius: 20px;
    }

    }
    .botao{
        width: 100%;
        height: auto;
        justify-content: center;
        display: flex;
        align-items: center;
    }
</Style>
<form  method="POST" action="recebeDados.php">

    <div class="form">
        <div align = "center"><center>
                <p> Username: <input type="text" name="username" size="10">&nbsp;&nbsp;
                    Senha:<input type="password" name="senha" size="10"></p>
            </center></div>
        <br>
        <div align = "center"><center>
                <p> Nome: <input type="text" name="nome" size="20">
            </center></div>
        <br>
        <div align = "center"><center>
                <p> Cpf: <input type="number" name="cpf" size="20">
            </center></div>
        <br>
        <div align = "center"><center>
                <p> E-mail: <input type="text" name="email" size="20">
            </center></div>
        <br>
        <div align = "center"><center>
                <p> Cidade: <input type="text" name="cidade" size="20">&nbsp;&nbsp;Estado:<input type="text" name="estado" size="2"
                                                                                                 maxlength="2"></p>
            </center></div>
        <div align = "center"><center>
        </div>
        <div class="botao">
            <p><input type="submit"   value="Enviar" name="enviar"></p>
        </div>
        </center></div>
</form>

</body>
</html>