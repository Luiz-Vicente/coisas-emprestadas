<?php
    require "php/autentica.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meus dados</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/meus-dados.css">
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="#">Meus dados</a></li>
            <li><a href="./php/logout.php">Sair</a></li>
        </ul>
    </nav>
    <main>
            <?php
                include "php/conexao.php";

                $sql = "SELECT * FROM usuarios WHERE id = $id";
                $res = mysqli_query($con, $sql);

                $row = mysqli_fetch_assoc($res);
                $nome = $row['nome'];
                $telefone = $row['telefone'];
                $endereco = $row['endereco'];
                $email = $row['email'];
                $senha = $row['senha'];
            ?>

        
        <form method="POST" action="./php/update.php">
            <div class="titulo">
                <h1>Meus dados</h1>
            </div>
            <div class='lista-de-dados'>
                <div class='titulo'>
                    <h2><?php echo $nome;?></h2>
                </div>
                <input hidden name="id" id='id' type='text' value="<?php echo $id;?>">
                <label for='telefone'>Telefone:</label>
                <input name="telefone" id='telefone' type='tel' value="<?php echo $telefone;?>">
                <label for='endereco'>Endereço:</label>
                <input name="endereco" id='endereco' type='text' value="<?php echo $endereco;?>">
                <label for='email'>E-mail:</label>
                <input name="email" id='email' type='email' value="<?php echo $email;?>">
                <label for='senha'>Senha:</label>
                <input name="senha" id='senha' type='text' value="<?php echo $senha;?>">
                <button type="submit" class='btn-padrao'>Alterar</button>
                <?php echo "<a href='./php/delete.php?id=".$row['id']."' class='btn-alerta'>Deletar conta</a>"?>
            </div>
        </form>
    </main>
</body>
</html>