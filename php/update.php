<?php
include "conexao.php";
$id = $_POST['id'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "UPDATE usuarios SET telefone = '$telefone', endereco = '$endereco', email = '$email', senha = '$senha' WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if($res){
    header("Location: /emprestimos.php");
}else{
    echo "Infelizmente não foi possível alterar, tente novamente<br>";
    echo "<a href='./meus-dados.php'>Voltar</a>";
}

?>