<?php
    require "php/autentica.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empréstimos</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/emprestimos.css">
</head>
<body>
    <nav>
        <ul>
            <li><a class="active" href="#">Empréstimos</a></li>
            <li><a href="./meus-dados.php">Meus dados</a></li>
            <li><a href="./php/logout.php">Sair</a></li>
        </ul>
    </nav>
    <main>
        <form method="POST" action="./php/devolucao.php">

            <?php
                include "php/conexao.php";

                $sql = "SELECT * FROM usuarios WHERE id = $id";
                $res = mysqli_query($con, $sql);

                $row = mysqli_fetch_assoc($res);
                $carro = $row['carro'];
                $devolucao = $row['devolucao'];
                
                
                $data = date("Y-m-d");
                $dataAtual = date_create($data);
                $dataFinal = date_create($devolucao);
            ?>

            <div class="titulo">
                <h1>Carros emprestados</h1>
                <a href="./novo-emprestimo.php" class="btn-novo">+</a>
            </div>
            <div class="lista-de-dados">
                <div class="titulo">
                    <h2>Nome do carro</h2>
                    <button type="submit" class="btn-padrao">Devolvido</button>
                </div>
                <label for="emprestimo">Empréstimo:</label>
                <input readonly name="carro" readyonly id="emprestimo" type="text" value="<?php echo $carro; ?>">
                <label for="devolucao">Devolução:</label>
                <input readonly name="devolucao" id="devolucao" type="text" value="<?php echo $devolucao; ?>">
                <input hidden name="id" id='id' type='text' value="<?php echo $id;?>">
            </div>
            <?php
                if($dataAtual > $dataFinal){
                    echo "<p   class='erro'>Devolução pendente</p>";
                }
            ?>
        </form>
    </main>
</body>
</html>