<?php 
    session_start();
    //print_r($_SESSION);
    if((!isset($_SESSION['nome']) == true) and (!isset($_SESSION['senha']) == true))
    {   
        unset($_SESSION['nome']);
        unset($_SESSION['senha']);
        header('Location: logmeren.php');
    }
    $logado = $_SESSION['nome'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>next page</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="sair.php">Lanche do Dia</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="d-flex">
            <a href="sair.php" class="btn btn-danger me-5" >Sair</a>
        </div>
    </nav>
    <?php 
    echo"Bem vindo <u>$logado";
    ?>
</body>

</html>