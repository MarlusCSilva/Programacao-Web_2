<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>            
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>Delivery e Comercío - IFood</title>
</head>
<body>
    <?php include("includes/cabecalho.php");?>
    <?php include("includes/menu.php");?>
    <main>
        <?php
            include_once("controller/verurl.php");
            $redirecionar = new VerUrl();
            $redirecionar->trocarUrl(@$_GET['secao']);
        ?>



    </main>
    <?php include("includes/rodape.php");?>
    
    
    
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>