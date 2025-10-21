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
    <h1>Cadastro de clientes</h1>
    <!--
    <header>
        <a href="../produto/cadproduto.php">Cadastrar produto</a>
        <a href="../cliente/cadcliente.php">Cadastrar cliente</a>
        <a href="../cliente/listar_cli.php">Consultar todos os clientes</a>
        <a href="../produto/listar_prod.php">Consultar todos os produtos</a>
    </header>
    -->
    <button id="voltar" onclick="voltarMenu()">Voltar ao menu</button>
    <hr>
    <div id="pesquisar-cliente">
        <h2>Pesquisar cliente</h2>
        <div id="formulario">
            <form action="./consultacli_nome.php" method="POST" id="formulario-cliente">
                <p>Digite um nome completo:</p>
                <input type="text" name="cxnomepesquisa" />
                <input type="submit" value="Pesquisar">
            </form>
            <button onclick="listarClientes()">Listar todos os clientes</button>
        </div>  
    </div>
    
    <hr>

    <div id="cadastrar-cliente">
        <h2>Cadastrar cliente</h2>
        <form action="../cliente/inserircliente.php" method="POST" id='cadastro-cliente'>
            <p>Cliente:</p>
            <input type="text" name="cxnome">
            <p>Idade:</p>
            <input type="text" name="cxidade">
            <p>Cidade:</p>
            <input type="text" name="cxcidade">
            <p>Email:</p>
            <input type="text" name="cxemail">
            <input type="reset" value="Cancelar">
            <input type="submit" value="Enviar">
        </form>
    </div>
    

    <script>
        document.getElementById("cadastro-cliente").reset()
    </script>

    <script src="../../js/javinha.js"></script>

</body>

</html>