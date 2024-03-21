<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>IFood my</title>
</head>

<body>
    
    <?php include("include/cabecalho.php"); ?>
    <?php include("include/menu.php"); ?>
    <main>
        <div class="container">
            <h1 class="display-4"><?php
        session_start();
        $username = $_SESSION['username'];
        echo '<h1>Bem vindo, ' .$username.'!</h1>';
        ?></h1>
            <p class="lead">Seja bem-vindo à sua área administrativa.</p>
        </div>
        
        <?php
        include_once("controller/verurl.php");
        $redirecionar = new VerUrl();
        $redirecionar->trocarUrl(@$_GET['secao']);

        ?>
    </main>
    <?php include("include/rodape.php"); ?>
    <script src="js/bootstrap.js"></script>
</body>

</html>