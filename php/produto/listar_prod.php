<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style2.css">
    <title>Lista Geral</title>
</head>
<body>
    <h1>Consultar todos os produtos</h1>
    <!--
    <header>
        <a href="../produto/cadproduto.php">Cadastrar produto</a>
        <a href="../cliente/cadcliente.php">Cadastrar cliente</a>
        <a href="../cliente/listar_cli.php">Consultar todos os clientes</a>
        <a href="../produto/listar_prod.php">Consultar todos os produtos</a>
    </header>
    -->
    <button id="voltar" onclick="window.location = 'cadproduto.php'">Voltar</button>
    <?php
        require_once "../../factory/conexao.php";
        $consulta = "select * from tbproduto";
        
        $executar = mysqli_query($conn, $consulta);
        while($coluna = mysqli_fetch_array($executar)){
    ?>  
        <div class="listagemProduto">
            <p>Nome do produto:</p> <?php echo "<p>" . $coluna["nomeprod"] . "</p>";?>
            <p>Quantidade:</p> <?php echo "<p>" . $coluna["qtde"] . "</p>";?>
            <p>Marca:</p> <?php echo "<p>" . $coluna["marca"] . "</p>";?>
            <p>Setor:</p> <?php echo "<p>" . $coluna["setor"] . "</p>";?>
            <p>Valor:</p> <?php echo "<p>" . $coluna["valor"] . "</p>";?>  
        </div>  
         
            <hr>
        <?php } ?>
    
    <script>
        function voltarCadProd(){
            window.location = "cadproduto.php"
        }
    </script>

    <!-- <script src="../../js/javinha.js"></script> -->

</body>
</html>