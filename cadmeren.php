<?php

if(isset($_POST['submit']))
{
//       print_r('Nome: ' . $_POST['nome']);
//        print_r('<br>');
//        print_r('Telefone: ' . $_POST['tel']);


include_once('config.php');

    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,tel,senha) VALUES ('$nome','$tel','$senha')");

    header('Location: logmeren.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Merendeira</title>
    <link rel="stylesheet" href="cadlogmeren.css">
</head>

<body>
    <form action="cadmeren.php" method="POST">
        <fieldset>
            <h1>Cadastro de Funcionários</h1>
            <!-- Seus elementos de formulário aqui -->
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" size="30px" required>
            <br><br>
            <label for="telefone">Telef:</label>
            <input type="tel" id="tel" name="tel" size="30px" required>
            <br><br>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" size="30px" required>
            <br><br>
            <center> <input type="submit" name="submit" id="submit"></center>
        </fieldset>
    </form>
</body>

</html>