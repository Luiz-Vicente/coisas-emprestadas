<?php
    require "php/autentica.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/style-admin.css">
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="#">Usuarios</a></li>
            <li><a href="./php/logout.php">Sair</a></li>
        </ul>
    </nav>
    <main>
        <form action="">
            <div class="titulo">
                <h1>Usuarios</h1>
            </div>
            <?php
                
                include "php/conexao.php";

                $sql = "SELECT id, nome, telefone, endereco, email, carro, devolucao FROM usuarios";
                $res = mysqli_query($con, $sql);

                while($row = mysqli_fetch_assoc($res)){
                    $idUser = $row['id'];
                    $nome = $row['nome'];
                    $telefone = $row['telefone'];
                    $endereco = $row['endereco'];
                    $email = $row['email'];
                    $carro = $row['carro'];
                    $devolucao = $row['devolucao'];

                    echo "
                    <div class='lista-de-dados'>
                        <div class='titulo'>
                            <h2>".$nome."</h2>
                            <a href='./php/delete-usuario.php?id=".$idUser."' type='submit' class='btn-alerta'>Deletar</a>
                        </div>
                        <p>Telefone: ".$telefone."</p>
                        <p>Endereço: ".$endereco."</p>
                        <p>E-mail: ".$email."</p>
                        <p>Empréstimo: ".$carro."</p>
                        <p>Devolução: ".$devolucao."</p>
                    </div>";
                        
                }

            ?>
        </form>
    </main>
</body>
</html>