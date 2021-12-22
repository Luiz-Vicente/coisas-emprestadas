<?php
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];

include "conexao.php";

//Verifica se o e-mail está cadastrado
$sql1 = "SELECT * FROM usuarios WHERE email = '$email'";
$res1 = mysqli_query($con, $sql1); //envio das informações para a conexão estabelecida em conexao.php

//Quantidade de resgistros em $res1
$qtdeRegistros = mysqli_num_rows($res1);

//Se estiver cadastrado retorna ao cadastro.php com erro
if($qtdeRegistros > 0){
    header("Location: /cadastro.php?email");
}else{
    //se não estiver cadastrado ainda, então cadastra um novo usuário
    //insersão de novo usuário
    $sql2 = "INSERT INTO `usuarios`(`nome`, `telefone`, `endereco`, `email`, `senha`, `carro`, `devolucao`) VALUES ('$nome','$telefone','$endereco','$email','$senha','','')";
    $res2 = mysqli_query($con, $sql2); //envio das informações para a conexão estabelecida em conexao.php

    $sql3 = "SELECT * FROM usuarios WHERE nome = '$nome'AND telefone = '$telefone' AND endereco = '$endereco'AND email = '$email'AND senha = '$senha' AND carro = ''AND devolucao = ''";
    $res3 = mysqli_query($con, $sql3);
    $qtdeRegistros2 = mysqli_num_rows($res3);

    if($qtdeRegistros2 > 0){
        header("Location: /index.php");
    }
}
?>