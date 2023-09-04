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
<?php
include_once ('Formulario.php');
$username = $_POST["username"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
 echo "nome: ".$username."<br>"."senha: ".$senha."<br>"."nome: ". $nome."<br>"."email: ".$email;
$erro = 0;

if (strlen($username)<5)
{
    echo "O username deve possui no mínimo 5 caracteres.<br>"; $erro =1;
}
if (strlen($senha)<5)
{ echo "A senha deve possui no mínimo 5 caracteres.<br>"; $erro=1;
}
if(strlen($cpf <11))
{
    echo "Cpf invalido.<br>";$erro=1;
}

?>



</body>
</html>