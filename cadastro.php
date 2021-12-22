<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar-me</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../reset.css">
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

    <main>
        <form method="POST" action="./php/cad.php">
            <?php
                if(isset($_GET['email'])){
                    echo "<p class='erro'>Este e-mail já está cadastrado, use outro</p>";
                }
            ?>
            <h1>Cadastro</h1>
            <input required name="nome" placeholder="Nome" type="text">
            <input required name="telefone" placeholder="Telefone" type="tel" maxlength="11">
            <input required name="endereco" placeholder="Endereço" type="text">
            <input required name="email" placeholder="E-mail" type="email">

            <h2>Escolha uma senha</h2>
            <input name="senha" placeholder="Senha" type="text">
            <button type="submit">Cadastrar-me</button>
        </form>
        <a href="./index.php"><ins>Login</ins></a>
    </main>
</body>
</html>