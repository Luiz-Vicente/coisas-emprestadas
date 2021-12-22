<?php

    //(Re)iniciar
    session_start();

    $id = $_SESSION['id'];
    //verifica se não existe o valor id na sessão
    //ou seja, verifica se já existe uma sessão
    if(!isset($_SESSION['id'])){
        header("Location: /index.php?autentica=1");
    }
    
?>