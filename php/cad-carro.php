<?php
    $id = $_POST['id'];
    $carro = $_POST['carros'];
    $devolucao = $_POST['devolucao'];
    
    include "conexao.php";

    $sql = "UPDATE usuarios SET carro = '$carro', devolucao = '$devolucao' WHERE id = '$id'";
    $res = mysqli_query($con, $sql);

    $sql3 = "SELECT * FROM usuarios WHERE carro = '$carro'AND devolucao = '$devolucao'";
    $res3 = mysqli_query($con, $sql3);
    $qtdeRegistros2 = mysqli_num_rows($res3);

    if($qtdeRegistros2 > 0){
        header("Location: /emprestimos.php");
    }
?>