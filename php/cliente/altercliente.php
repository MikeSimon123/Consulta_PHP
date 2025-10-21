<?php 
    require_once '../../factory/conexao.php';
    $id = $_POST["cxcod"];
    $nome = $_POST["cxnome"];
    $idade = $_POST["cxidade"];
    $email = $_POST["cxemail"];
    $cidade = $_POST["cxcidade"];

    $alterar = "
        update tbcliente set cliente = '$nome', idade = '$idade', email = '$email', cidade = '$cidade' where codcliente = '$id';
    ";
    $exec = mysqli_query($conn, $alterar);

    if($exec){
        echo "<script>
                window.alert('Dados alterados com sucesso!');
                window.location = 'cadcliente.php'  
              </script>";
    } else {
        echo "<script>
                window.alert('Erro ao alterar os dados!');
                window.location = 'cadcliente.php'
              </script>";
    }


?>