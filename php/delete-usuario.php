<?php
    include "conexao.php";

    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id = $id";
    $res = mysqli_query($con, $sql);

    if($res){
        header("Location: /admin.php");
    }else{
        echo "Infelizmente não foi possível alterar, tente novamente<br>";
        echo "<a href='./meus-dados.php'>Voltar</a>";
    }
?>