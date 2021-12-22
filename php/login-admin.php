<?php
//recebe as váriaveis do form index.php
$email = $_POST['email'];
$senha = $_POST['senha'];

//inclusão do código de conexao com o banco de dados
include "conexao.php";

//validação de existencia do usuário
$sql = "SELECT * FROM admins WHERE email = '$email' AND senha = '$senha'";
$res = mysqli_query($con, $sql); //envio das informações para a conexão estabelecida em conexao.php

//Quantidade de resgistros em $res
$qtdeRegistros = mysqli_num_rows($res);

if($qtdeRegistros > 0){
    
    //Inicia a sessão
    session_start();
    //Obtem dados do usuário
    $row = mysqli_fetch_assoc($res);
    //Armazena os dados na sessão
    $_SESSION['id'] = $row['id'];
    $_SESSION['nome'] = $row['nome'];

    header("Location: /admin.php");
}else{
    header("Location: /login-admin.php?erro");
}
?>