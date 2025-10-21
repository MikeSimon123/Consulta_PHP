<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da pesquisa</title>
</head>
<body>
    <?php
        require_once "../../factory/conexao.php";
        $nomeprod = $_POST['cxprodutopesquisa'];
        $consul = "select * from tbproduto where nomeprod = '$nomeprod'";
        $executa = mysqli_query($conn,$consul);
        $coluna = mysqli_fetch_array($executa);
    ?>
    <h1>Resultado da pesquisa</h1>
    Nome:<br>
    <?php echo $coluna["nomeprod"];?><br>
    Marca:<br>
    <?php echo $coluna["marca"];?><br>
    Quantidade:<br>
    <?php echo $coluna["qtde"];?><br>
    Valor:<br>
    <?php echo $coluna["valor"];?><br>
    Setor:<br>
    <?php echo $coluna["setor"];?>

    
</body>
</html>