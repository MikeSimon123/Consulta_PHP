<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/style2.css" rel="stylesheet">
    <title>Resultado da pesquisa</title>
</head>
<body>
    <?php
        require_once "../../factory/conexao.php";
        $nome = $_POST['cxnomepesquisa'];
        $consulta = "select *from tbcliente where cliente = '$nome'";
        $executa = mysqli_query($conn,$consulta);
        $coluna = mysqli_fetch_array($executa);
    ?>
    <h1>Resultado da pesquisa</h1>
    
    <div id="consulta">
        <div id="Resconsulta">
            <p>Nome:</p>
            <?php echo "<p>" . $coluna["cliente"] . "</p>";?>
            <p>Idade:</p>
            <?php echo "<p>" . $coluna["idade"] . "</p>";?>
            <p>E-mail:</p>
            <?php echo "<p>" . $coluna["email"] . "</p>";?>
            <p>Cidade:</p>
            <?php echo "<p>" . $coluna["cidade"] . "</p>";?>
        </div>
        <button onclick="window.location = `excluircliente.php?id=<?php echo $coluna['codcliente']?>`">Excluir</button>
    </div>
    
    

    
</body>
</html>