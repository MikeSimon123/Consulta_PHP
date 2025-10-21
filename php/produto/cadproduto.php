<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../../css/style2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula crud</title>
</head>
<body>
    <h1>Cadastro de produtos</h1>
    <!---
    <header>
        <a href="../produto/cadproduto.php">Cadastrar produto</a>
        <a href="../cliente/cadcliente.php">Cadastrar cliente</a>
        <a href="../cliente/listar_cli.php">Consultar todos os clientes</a>
        <a href="../produto/listar_prod.php">Consultar todos os produtos</a>
    </header>
    -->
    <button id="voltar" onclick="voltarMenu()">Voltar ao menu</button>
    <hr>
    <div id="pesquisar-produto">
        <h2>Pesquisar produto</h2>
        <div id="formulario">
            <form action="./consultapro_nome.php" method="POST" id="formulario-prod">
                <p>Digite um nome completo:</p>
                <input type="text" name="cxprodutopesquisa"/>
                <input type="submit" value="Pesquisar">
            </form>
            <button onclick="listarProdutos()">Listar todos os produtos</button>
        </div>
    </div>
    
    <hr>

    <div id="cadastrar-produto">
        <h2>Cadastrar produto</h2>
        <form action="./inserirproduto.php" method="POST" id="cadastro-prod">
            <p>Produto:</p>
            <input type="text" name="cxnomeprod"/>
            <p>Marca:</p>
            <input type="text" name="cxmarca"/>
            <p>Quantidade:</p>
            <input type="text" name="cxqtde"/>
            <p>Setor:</p>
            <input type="text" name="cxsetor"/>
            <p>Valor:</p>
            <input type="text" name="cxvalor"/>
            <input type="reset" value="Cancelar">
            <input type="submit" value="Enviar">
        </form>
    </div>
    

    <script>
        document.getElementById("cadastro-prod").reset()
    </script>

    <script src="../../js/javinha.js"></script>

</body>
</html>