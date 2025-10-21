<?php
if($_POST["cxnome"] != ""){ 
    require_once "../../factory/conexao.php";
    $nome = $_POST["cxnome"];
    $idade= $_POST["cxidade"];
    $email = $_POST["cxemail"];
    $cidade = $_POST["cxcidade"];
    $inserir = "insert into tbcliente (cliente,idade,email,cidade) values ('$nome','$idade','$email','$cidade')";
    $query = mysqli_query($conn,$inserir);
    echo "<script>
    alert('Cliente gravado com sucesso!!');
    window.location = 'cadcliente.php'; 
  </script>";

}else{
    echo "<script>
              window.alert('Informações sobre o cliente estão incompletas! Preencha os campos obrigatórios!');
              window.location = 'cadcliente.php';
          </script>";
}
