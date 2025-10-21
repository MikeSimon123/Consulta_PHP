<?php
    include_once "../../factory/conexao.php";
    $id = $_GET['id'];

    $excluir = "delete from tbcliente where codcliente='$id'";
    $exec = mysqli_query($conn, $excluir);

    if($exec){
        echo "
            <script>
                window.alert('Dados excluídos com sucesso');
                window.location = 'listar_cli.php'
            </script>        
        ";
    } else {
        echo "
            <script>
                window.alert('Erro ao excluir cliente!');
                window.location = 'listar_cli.php'
            </script>
        ";
    }

?>