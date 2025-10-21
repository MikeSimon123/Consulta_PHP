<?php
  if ($_POST["cxnomeprod"] != "") { 
    require_once "../../factory/conexao.php";
    $produto = $_POST["cxnomeprod"];
    $marca = $_POST["cxmarca"];
    $qtde = $_POST["cxqtde"];
    $setor = $_POST["cxsetor"];
    $valor = $_POST["cxvalor"];
    $inserir = "insert into tbproduto
      (nomeprod,marca,qtde,setor,valor)
      values
      ('$produto','$marca','$qtde','$setor','$valor')";
    $query = mysqli_query($conn, $inserir);
    echo "<script>
        alert('Produto gravado com sucesso!!');
        window.location = 'cadproduto.php'; 
      </script>";

  } else {
    echo "<script>
              window.alert('Informações sobre o produto estão incompletas! Preencha os campos obrigatórios!');
              window.history.back();
          </script>";
  }
?>