<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style2.css">
    <title>Lista Geral</title>
</head>
<body>
    <h1>Consultar todos os clientes</h1>
    <!--
    <header>
        <a href="../produto/cadproduto.php">Cadastrar produto</a>
        <a href="../cliente/cadcliente.php">Cadastrar cliente</a>
        <a href="../cliente/listar_cli.php">Consultar todos os clientes</a>
        <a href="../produto/listar_prod.php">Consultar todos os produtos</a>
    </header>
    -->
    <button id="voltar" onclick="window.location = 'cadcliente.php'">Voltar</button>
    
    <?php
        require_once "../../factory/conexao.php";
        $consulta = "select * from tbcliente";
        
        $executar = mysqli_query($conn, $consulta);
     
       
        while($coluna = mysqli_fetch_array($executar)){
    ?>   
        <div class="listagemCliente">
            <p>Cliente:</p> <?php echo "<p>" . $coluna["cliente"] . "</p>";?>
            <p>Idade:</p> <?php echo "<p>" . $coluna["idade"] . "</p>";?>
            <p>Email:</p> <?php echo "<p>" . $coluna["email"] . "</p>";?>
            <p>Cidade:</p> <?php echo "<p>" . $coluna["cidade"] . "</p>";?>
            <button onclick="window.location = `excluircliente.php?id=<?php echo $coluna['codcliente']?>`">Excluir cliente</button>
        </div>
            <hr>
        <?php } ?>

        

        <!-- <script src="../../js/javinha.js"></script> -->

</body>
</html>