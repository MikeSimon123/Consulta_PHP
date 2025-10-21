<?php
    require_once "../../factory/conexao.php";
    $cod = $_GET['id'];
    $consulta = "select *from tbcliente where codcliente = '$cod'";
    $executa = mysqli_query($conn,$consulta);
    $coluna = mysqli_fetch_array($executa);
?>

<h1>Resultado da pesquisa para edição</h1>

<div id="consulta">
    <div id="Resconsulta">
        <form action="altercliente.php" method="POST">
            <p>Código:</p>
            <input type="text" name="cxcod" value='<?php echo $coluna["codcliente"];?>' readonly>
            <p>Nome:</p> 
            <input type="text" name="cxnome" value='<?php echo $coluna["cliente"];?>'>
            
            <p>Idade:</p>
            <input type="text" name="cxidade" value='<?php echo $coluna["idade"];?>'>
            
            <p>E-mail:</p>
            <input type="email" name="cxemail" value='<?php echo $coluna["email"];?>'>
            
            <p>Cidade:</p>
            <input type="text" name="cxcidade" value='<?php echo $coluna["cidade"];?>'>

            <button type="submit">Alterar</button>
        </form>
    </div>
</div>