<?php
include "conexao.php";
$id = $_POST['id'];
$carro = $_POST['carro'];
$devolucao = $_POST['devolucao'];

$sql = "UPDATE usuarios SET carro = '', devolucao = '' WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if($res){
    header("Location: /meus-dados.php");
}else{
    echo "Infelizmente não foi possível alterar, tente novamente<br>";
    echo "<a href='./meus-dados.php'>Voltar</a>";
}

?>