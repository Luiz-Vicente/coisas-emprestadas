<?php
    require "php/autentica.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo empréstimo</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/nav.css">
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
        <form method="POST" action="./php/cad-carro.php">
            <?php
                $id = $_SESSION['id'];
            ?>
            <div class="titulo">
                <h1>Carros emprestados</h1>
                <a href="./emprestimos.php" class="">Voltar</a>
            </div>
            <div class="lista-de-dados">
                <label for="carros">Carro:</label>
                <select name="carros" id="carros">
                    <option value="Camaro">Camaro</option>
                    <option value="Mustang">Mustang</option>
                    <option value="Opala">Opala</option>
                    <option value="Caravan">Caravan</option>
                </select>
                <label for="devolucao">Data de devolução:</label>
                <input name="devolucao" id="devolucao" type="date">
                <input name="id" hidden type="text" value="<?php echo $id; ?>">
            </div>
            <button class="btn-padrao" type="submit">Emprestar</button>
        </form>
    </main>
</body>
</html>